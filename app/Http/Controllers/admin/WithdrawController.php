<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\investor\Investment;
use App\Models\Withdraw;
use App\Notifications\InvestorNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class WithdrawController extends Controller
{
    /**
     * Display a listing of the resource.->where()
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $withdraws = Withdraw::with(['user', 'investor', 'investment'])->where(['status' => 'pending'])->orWhere('status', 'failed')->get();
        // return $withdraws;

        return view('users.admin.withdraw-request.index', compact(['withdraws']));
    }


    public function processWithdraw($id){
        $withdraw = Withdraw::with(['user', 'investor', 'investment'])->where('id', $id)->first();
        // return $withdraw;
        $inv = Investment::where('id', $withdraw->investment_id)->with(['investor', 'coin'])->first();
        // return $inv;
        if ($withdraw->type=="coin") {
            # code...
            return view('users.admin.withdraw-request.user-details', compact(['withdraw', 'inv']));

        } else {
            # code...
            return view('users.admin.withdraw-request.refwithdraw-request', compact(['withdraw']));
        }


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
    }
    public function withdrawStatus($id, $status){
        $withdraw = Withdraw::with(['user', 'investor', 'investment'])->where('id', $id)->first();
    //    return $withdraw;
        $withdraw->status = strtolower($status);
        $withdraw->update();
        $bg ="bg-".$status;
        $icon = "mdi mdi-cash-multiple";
        $message ='Your withdraw request of ₦' . $withdraw->amount." was ". $status;
        Notification::send($withdraw->user, new InvestorNotification($bg, $icon, $message));
        $message ='Your payment request of ₦'. $withdraw->amount." was ". $status;

        Notification::send(Auth::user(), new InvestorNotification($bg, $icon, $message));
        
        return redirect()->route('withdraw-request.index')->with(strtolower($status), 'The payment of ₦'.$withdraw->amount. ' was '. $status );
     
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
