<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConfigurationRequest;
use App\Models\Coin;
use App\Models\Configuration;
use App\Models\Investor;
use App\Models\investor\Investment;
use App\Models\News;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $investor = Investor::with(['user'])->where('user_id', Auth::user()->id)->first();
        // return $investor;
        $invs = Investment::with(['investor', 'coin'])->get();
        $ainvs = Investment::with(['investor', 'coin'])->get();
        $pinvs = Investment::with(['investor', 'coin'])->where('status', 'pending')->get();
        // return $invs;
        $users = User::get();
        $with = Withdraw::where('status', 'success')->get();
        $withr = Withdraw::where('status', '!=', 'success')->get();
        $coins = Coin::where('status', 'active')->get();
        $news = News::get();
        $transactions = Transaction::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->with(['user', 'investment'])->get();

        return view('users.admin.index', compact(['investor','pinvs','news','withr','ainvs','users','with', 'invs', 'coins', 'transactions']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.admin.site-setting');
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
    public function update(ConfigurationRequest $request, $id)
    {
        //
        $config = Configuration::where('id', $id)->first();
        $config->name = $request->name;
        $config->email = $request->email;
        $config->phone =$request->phone;
        $config->about = $request->about;
        $config->vision = $request->vision;
        $config->mission = $request->mission;
        $config->address = $request->address;
        $config->investment_percentage = $request->dbonus/100;
        $config->investment_charges = $request->icharge/100;
        $config->referral_percentage = $request->refbonus/100;
        $config->withdraw_charges = $request->wcharge/100;
        $config->investment_duration = $request->duration;
        $config->referral_max_withdraw = $request->rwmax;
        // $config->addMediaFromRequest('logo')->toMediaCollection("logo");

        if($request->file("logo")){
            $config->delete($id);
            $config->clearMediaCollection();
            $config->addMediaFromRequest('logo')->toMediaCollection("logo");
        }

        $config->save();

        return redirect()->route('admindashboard')->with('succee', 'Site setting updated successfully');
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
