<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Coin;
use App\Models\Investor;
use App\Models\investor\Investment;
use App\Models\Referral;
use App\Models\Transaction;
use App\Models\Withdraw;
use App\Notifications\InvestorNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class InvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $inv = Investment::with(['coin'])->where('id', $id)->first();
        return view('users.admin.invs.investment-details', compact(['inv']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $invest = Investment::where('id', $id)->with(['investor', 'coin'])->first();
        $coin = Coin::where('id', $invest->coin->id)->first();
        $invest->invest_date = date('Y-m-d');
        $invest->expected_amount = $coin->price+($coin->price*appSettings()->investment_percentage*appSettings()->investment_duration);
        $invest->revenue = $invest->quantity*appSettings()->investment_percentage;
        $investor = Investor::where('id', $invest->investor->id)->with(['user'])->first();
        // return $investor;
        $invest->end_date = date("Y-m-d" ,strtotime("+".appSettings()->investment_duration." day"));
        $invest->status ="active";
        $ref = Referral::where('user_id', $investor->user->id)->first();

        if($ref->investor_id){
            $previousinv = Investment::where('investor_id', $investor->id)->first();
            // return $previousinv;
            if(!$previousinv->revenue){
                $refbonus = Investor::with(['user'])->where('id', $ref->investor_id)->first();
                // return $ref;
                $currentBal = $refbonus->referral_bonus;
                $refbonu = $coin->price*$invest->quantity*appSettings()->referral_percentage;
                $currentBal += $refbonu;
                $refbonus->referral_bonus = $currentBal;
                $refbonus->update();
                $bg ="bg-success";
                $icon = "mdi mdi-cash-multiple";
                $message ='You received'. $refbonu." from ". $investor->user->name;
                Notification::send($refbonus->user, new InvestorNotification($bg, $icon, $message));
                $transaction = new Transaction();
                $transaction->price = $refbonu;
                $transaction->action = "Received bonus from referral";
                $transaction->user_id = $refbonus->user->id;
                $transaction->save();

            }
        }

        $invest->update();
        $bg ="bg-success";
        $icon = "mdi mdi-cash-multiple";
        $message ='Your payment of buy '. $coin->quantity." with transfer have confirmed";
        Notification::send($investor->user, new InvestorNotification($bg, $icon, $message));
        $transaction = new Transaction();
        $transaction->investment_id = $invest->id;
        $transaction->price = $coin->price;
        $transaction->action = "Purchase ". $coin->quantity. ' wrap coin by transfer card';
        $transaction->user_id = $investor->user->id;
        $transaction->save();
        return redirect()->back()->with('success', 'Approval of payment successfully');

    }


    public function active(){
        $invs = Investment::where('status', 'active')->with(['investor', 'coin'])->get();
    //    return $invs->users(14);
        return view('users.admin.invs.active', compact(['invs']));
    }
    public function pending(){
        $invs = Investment::where('status', 'pending')->with(['investor', 'coin'])->get();
        return view('users.admin.invs.pending', compact(['invs']));
    }
    public function ended(){
        $invs = Investment::whereDate('end_date','<=', date('Y-m-d'))->where('status', '!=', 'withdraw')->with(['investor', 'coin'])->get();
        // return $invs;
        return view('users.admin.invs.ended', compact(['invs']));
    }
    public function withdrawed(){
        $invs = Withdraw::where('status', 'success')->with(['investor', 'investment', 'user'])->get();
        // return $invs;
        return view('users.admin.invs.withdrawed', compact(['invs']));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
