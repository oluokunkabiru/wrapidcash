<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvestorUpdateProfile;
use App\Http\Requests\TransferRequest;
use App\Models\Bank;
use App\Models\Coin;
use App\Models\Investor;
use App\Models\investor\Investment;
use App\Models\Referral;
use App\Models\Transaction;
use App\Models\User;
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
    public function store(TransferRequest $request)
    {
        //
        // return $request;
        $invest = new Investment();
        $invest->coin_id = $request->coinid;
        $invest->depositor_name = $request->name;
        $invest->addMediaFromRequest('evidence')->toMediaCollection('evidence');
        $coin = Coin::where('id', $request->coinid)->first();
        $ref = Referral::where('user_id', Auth::user()->id)->first();
        $investor = Investor::where('user_id', Auth::user()->id)->first();
        $invest->investor_id = $investor->id;
        $invest->payment = "transfer";
        $quantity= $request->quantity;;
        $invest->invest_amount = $coin->price;
        $invest->expected_amount = $coin->price+($coin->price*appSettings()->investment_percentage*appSettings()->investment_duration);
        $invest->quantity =$quantity;
        // if($ref->investor_id){
        //     $previousinv = Investment::where('investor_id', $investor->id)->first();
        //     if(!$previousinv){
        //         $refbonus = Investor::with(['user'])->where('id', $ref->investor_id)->first();
        //         // return $ref;
        //         $currentBal = $refbonus->referral_bonus;
        //         $refbonu =  $coin->price*$quantity*appSettings()->referral_percentage;
        //         $currentBal += $refbonu;
        //         $refbonus->referral_bonus = $currentBal;
        //         $refbonus->update();
        //         $bg ="bg-success";
        //         $icon = "mdi mdi-cash-multiple";
        //         $message ='You buy '. $coin->quantity." with cash";
        //         Notification::send($refbonus->user, new InvestorNotification($bg, $icon, $message));
        //     }
        // }

        $invest->save();
        $bg ="bg-warning";
        $icon = "mdi mdi-cash-multiple";
        $message ='You buy '. $coin->quantity." with cash";
        Notification::send(Auth::user(), new InvestorNotification($bg, $icon, $message));
        $transaction = new Transaction();
        $transaction->investment_id = $invest->id;
        $transaction->price = $coin->price;
        $transaction->action = "Purchase ". $quantity. ' wrap coin by transfer';
        $transaction->user_id = Auth::user()->id;
        $transaction->save();
        return redirect()->route('usersdashboard')->with('success', 'You have invested');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\investor\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // return User::first();
        $inv = Investment::with(['coin'])->where('id', $id)->first();
        return view('users.investor.investment-details', compact(['inv']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\investor\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function edit(Investment $investment)
    {
        //
        $banks = Bank::get();
        return view('users.investor.profile-setting', compact(['banks']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\investor\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function update(InvestorUpdateProfile $request, Investment $investment)
    {
        //
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\investor\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investment $investment)
    {
        //
    }
}
