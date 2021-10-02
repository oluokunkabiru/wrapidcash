<?php

namespace App\Http\Controllers\investor;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransferRequest;
use App\Models\Bank;
use App\Models\Coin;
use App\Models\investor\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $coins = Coin::orderBy('price', 'asc')->where('status', 'active')->get();
        return view('users.investor.coin', compact(['coins']));
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

    public function coinDetail($id){
        $coin = Coin::where('id', $id)->first();
        $banks = ["bank"=>["bank" => "UBA", "account_number"=>"2073581143", "account_name" =>"OLUOKUN KABIRU"]];//Bank::get();

        //    return print_r($banks);
        return view('users.investor.coin-detail', compact(['coin', 'banks']));
    }

    public function coinPrice(Request $request){
          $id = $request->id;
        $qty = $request->qty;
        $coin = Coin::where('id', $id)->first();
        $charges =number_format($coin->price * appSettings()->investment_charges*$qty, 2, '.', ',');
        $price = ($coin->price + $coin->price * appSettings()->investment_charges)*$qty;
        $amount = number_format($price, 2, '.', ',');
        $transaction = ['charge' =>$charges,'amount'=>$amount,'quantity' => $qty, 'pamount'=> $price*100,
        'metadata' => json_encode([
            'coinid' => $coin->id,
            'qty' => $qty,
            'custom_fields' => [
                [
                    'display_name' => 'Investor name',
                    'variable_name' => 'name',
                    'value' => Auth::user()->name,
                ],
                [
                    'display_name' => 'Phone Number',
                    'variable_name' => 'phone',
                    'value' => Auth::user()->phone,
                ],
                [
                    'display_name' => 'Coin Quantity',
                    'variable_name' => 'Quantity',
                    'value' => $qty,
                ],
                [
                    'display_name' => 'Coin Name',
                    'variable_name' => 'coin' ,
                    'value' => $coin->name,
                ],
                [
                    'display_name' => 'Investment status',
                    'variable_name' => 'status',
                    'value' => 'Active',
                ],
            ],
        ])];

        return json_encode($transaction);

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
