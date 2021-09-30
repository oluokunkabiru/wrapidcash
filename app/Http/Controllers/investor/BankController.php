<?php

namespace App\Http\Controllers\investor;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\Investor;
use App\Models\investor\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class BankController extends Controller
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

   

    public function transactionHistory(){
        return view('users.investor.transaction-history') ;
    }

    public function validateAccountNumber(Request $request){
        // $test  = new Bank();
        $code = $request->bank;
        $accno = $request->accountnumber;
        // return $code;
        $response = Http::get('https://maylancer.org/api/nuban/api.php', [
            'account_number' => $accno,
            'bank_code' => $code,
        ]);

        $result = json_decode($response);
        return $response; //$result->account_name;
    }


    public function withdrawRequest(){
        $investor = Investor::where('user_id', Auth::user()->id)->with(['user'])->first();
        $invs = Investment::with(['investor', 'coin'])->where('investor_id', $investor->id)->get();
        return view('users.investor.withdraw-request', compact(['invs']));
    }


    public function withdrawMyMoney($id){
        $investor = Investor::where('user_id', Auth::user()->id)->with(['user'])->first();
        $inv = Investment::with(['investor', 'coin'])->where('id', $id)->first();
        return $inv;
        return view('users.investor.withdraw-request', compact(['invs']));
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
