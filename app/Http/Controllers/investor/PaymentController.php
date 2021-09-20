<?php

namespace App\Http\Controllers\investor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        return $paymentDetails;

        // $userid =  $paymentDetails['data']['metadata']['offender_id'];

        // $offender = Offender::where('id', $userid)->first();
        // $offender->payment_method = "Card";
        // $offender->payment_status = "paid";
        // $offender->payment_details = $paymentDetails;
        // $offender->update();
        // return redirect()->route('offence-receipt', $userid)->with('success', 'Your payment of NGN'. $offender->amount. ' was successful') ;

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
