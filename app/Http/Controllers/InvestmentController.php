<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransferRequest;
use App\Models\Coin;
use App\Models\Investor;
use App\Models\investor\Investment;
use App\Models\Referral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\investor\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function show(Investment $investment)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\investor\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investment $investment)
    {
        //
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
