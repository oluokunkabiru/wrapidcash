<?php

namespace App\Http\Controllers\investor;

use App\Http\Controllers\Controller;
use App\Models\Investor;
use App\Models\investor\Investment;
use App\Models\User;
use App\Models\Withdraw;
use App\Notifications\InvestorNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class WithdrawerRequest extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $withdraws = Withdraw::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        return view('users.investor.withdraw.withdraw-history', compact(['withdraws']));
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
        $id =  $request->invid;
        $inv = Investment::where('id', $id)->with(['investor', 'coin'])->first();
        $alrwith = Withdraw::where('investment_id', $id)->first();
        $totalInv =$inv->coin->price*($inv->quantity+$inv->revenue);
        $charges = $totalInv*appSettings()->withdraw_charges;
        $withdrawable = $totalInv-$charges;
        if(!$alrwith){
        $withdraw = new Withdraw();
        $withdraw->user_id = $inv->investor->user_id;
        $withdraw->investment_id = $id;
        $withdraw->type = "coin";
        $withdraw->status = "pending";
        $withdraw->investor_id = $inv->investor->id;
        $withdraw->amount = $withdrawable;//$inv->coin->price*($inv->quantity+$inv->revenue);
        $withdraw->save();
        $inv->status = "withdraw";
        $inv->update();
        $bg ="bg-warning";
        $icon = "mdi mdi-currency-ngn";
        $message ='Your withdraw request of '. ($inv->quantity+$inv->revenue).' have received and it will processed very soon';
        Notification::send(Auth::user(), new InvestorNotification($bg, $icon, $message));

        $bg ="bg-warning";
        $icon = "mdi mdi-currency-ngn";
        $message = Auth::user()->name.' requst to  withdraw '. ($inv->quantity+$inv->revenue).' '. $inv->coin->name .', please process the request ';
        $admin = User::where('role', 'admin')->first();
        Notification::send($admin, new InvestorNotification($bg, $icon, $message));
        return redirect()->route('usersdashboard')->with('success', 'Your withdraw request have been received successfully');
    }else{
        return redirect()->route('usersdashboard')->with('delete', 'You already request withdraw for this investment');
    }
}

public function refWithdrawRequest(Request $request){
    $id =  $request->investorid;
    $investor = Investor::where('id', $id)->first();
    // return $investor;
    if($investor->referral_bonus >= appSettings()->referral_max_withdraw ){

        $withdraw = new Withdraw();
        $withdraw->user_id = $investor->user_id;
        // $withdraw->investment_id = $id;
        $withdraw->type = "referral";
        $withdraw->status = "pending";
        $withdraw->investor_id = $investor->id;
        $withdraw->amount = $investor->referral_bonus;
        $withdraw->save();
        $investor->referral_bonus -= $investor->referral_bonus;
        $investor->update();
        $bg ="bg-warning";
        $icon = "mdi mdi-human-male-female";
        $message ='Your withdraw request for referral bonus of '. $withdraw->amount.' have received and it will processed very soon';
        Notification::send(Auth::user(), new InvestorNotification($bg, $icon, $message));

        $bg ="bg-warning";
        $icon = "mdi mdi-currency-ngn";
        $message = Auth::user()->name.' requst to  withdraw referral bonus of '. $withdraw->amount.', please process the request ';
        $admin = User::where('role', 'admin')->first();
        Notification::send($admin, new InvestorNotification($bg, $icon, $message));
        return redirect()->route('usersdashboard')->with('success', 'Your withdraw request have been received successfully');
    }else{
        return redirect()->route('usersdashboard')->with('delete', 'You already request withdraw for this investment');
    }
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
