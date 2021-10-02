<?php

namespace App\Http\Controllers\investor;

use App\Http\Controllers\Controller;
use App\Models\Coin;
use App\Models\Investor;
use App\Models\investor\Investment;
use App\Models\Referral;
use App\Models\Transaction;
use App\Notifications\InvestorNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Facades\Paystack;

class PaymentController extends Controller
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


    public function redirectToGateway()
    {
        try{
            // return dd(Paystack::getAuthorizationUrl());
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return dd($e);
            // return "herro";
            return Redirect::back()->with(['fail'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }



    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();



        // return $paymentDetails['data']['amount'];

        $reference = $paymentDetails['data']['reference'];
        // return $ref;
        $amount = $paymentDetails['data']['amount']/100;
        $quantity =$paymentDetails['data']['metadata']['qty'];
        // return $amount;
        $already = Investment::where('ref', $reference)->first();
        // return $quantity*appSettings()->investment_percentage;
        if($already){
            return redirect()->route('usersdashboard')->with('delete', 'You already invest with this reference number : '. $reference);
        }else{
        $coinid =  $paymentDetails['data']['metadata']['coinid'];
        $invest = new Investment();
        $invest->coin_id = $coinid;
        $invest->depositor_name = Auth::user()->name;
        $coin = Coin::where('id', $coinid)->first();
        $ref = Referral::where('user_id', Auth::user()->id)->first();
        $investor = Investor::where('user_id', Auth::user()->id)->first();
        $invest->investor_id = $investor->id;
        $invest->payment = "card";
        $invest->status = "active";
        $invest->quantity = $quantity;
        $invest->ref = $reference;
        $invest->invest_date = date('Y-m-d');
        $invest->invest_amount = $coin->price*$quantity;
        $invest->expected_amount = $coin->price+($coin->price*appSettings()->investment_percentage*appSettings()->investment_duration);
        $invest->revenue = $quantity*appSettings()->investment_percentage;

        $invest->end_date = date("Y-m-d" ,strtotime("+".appSettings()->investment_duration." day"));
        if($ref->investor_id){
            $previousinv = Investment::where('investor_id', $investor->id)->first();
            if(!$previousinv){
                $refbonus = Investor::with(['user'])->where('id', $ref->investor_id)->first();
                // return $ref;
                $currentBal = $refbonus->referral_bonus;
                $refbonu = $coin->price*$quantity*appSettings()->referral_percentage;
                $currentBal += $refbonu;
                $refbonus->referral_bonus = $currentBal;
                $refbonus->update();
                $bg ="bg-success";
                $icon = "mdi mdi-cash-multiple";
                $message ='You received'. $refbonu." from ". Auth::user()->name;
                Notification::send($refbonus->user, new InvestorNotification($bg, $icon, $message));
                $transaction = new Transaction();
                $transaction->price = $refbonu;
                $transaction->action = "Received bonus from referral";
                $transaction->user_id = $refbonus->user->id;
                $transaction->save();

            }
        }

        $invest->save();
        $bg ="bg-success";
        $icon = "mdi mdi-cash-multiple";
        $message ='You buy '. $coin->quantity." with credit card";
        Notification::send(Auth::user(), new InvestorNotification($bg, $icon, $message));
        $transaction = new Transaction();
        $transaction->investment_id = $invest->id;
        $transaction->price = $coin->price;
        $transaction->action = "Purchase ". $coin->quantity. ' wrap coin by credit card';
        $transaction->user_id = Auth::user()->id;
        $transaction->save();
        return redirect()->route('usersdashboard')->with('success', 'You have invested');
    }



        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
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
