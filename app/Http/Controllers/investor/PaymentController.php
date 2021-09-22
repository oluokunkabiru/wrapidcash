<?php

namespace App\Http\Controllers\investor;

use App\Http\Controllers\Controller;
use App\Models\Coin;
use App\Models\Investor;
use App\Models\investor\Investment;
use App\Models\Referral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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



        // return $paymentDetails;

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
        $invest->invest_date = date('Y-m-d');

        $invest->end_date = date("Y-m-d" ,strtotime("+30 day"));
        if($ref->investor_id){
            $previousinv = Investment::where('investor_id', $investor->id)->first();
            if(!$previousinv){
                $refbonus = Investor::where('id', $ref->investor_id)->first();
                // return $ref;
                $currentBal = $refbonus->referral_bonus;
                $refbonu = $coin->price*0.05;
                $currentBal += $refbonu;
                $refbonus->referral_bonus = $currentBal;
                $refbonus->update();
            }
        }

        $invest->save();
        return redirect()->route('usersdashboard')->with('success', 'You have invested');

        // return $offender;


        // return $paymentDetails;


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
