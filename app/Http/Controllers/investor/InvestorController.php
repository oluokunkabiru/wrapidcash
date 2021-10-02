<?php

namespace App\Http\Controllers\investor;

use App\Http\Controllers\Controller;
use App\Http\Requests\InvestorUpdateProfile;
use App\Models\Bank;
use App\Models\Coin;
use App\Models\Investor;
use App\Models\investor\Investment;
use App\Models\Transaction;
use App\Models\User;
use App\Notifications\InvestorNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

class InvestorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        // print_r($array);
        // return date("Y-m-d" ,strtotime("+30 day"));


        // return $investor;
             // return $invs;
        $coins = Coin::where('status', 'active')->paginate(5);
        $investor = Investor::with(['user'])->where('user_id', Auth::user()->id)->first();
        // return $investor;
        // $allcointype = Coin::where('status', 'active')->pluck('id')->toArray();
        // return $allcointype;
        $invs = Investment::with(['investor', 'coin'])->where('investor_id', $investor->id)->get();
        $activeinvestment = Investment::with(['investor', 'coin'])->where(['investor_id'=> $investor->id, ])->get();

        $transactions = Transaction::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->with(['user', 'investment'])->get();

        return view('users.investor.index', compact(['investor', 'invs', 'coins', 'transactions']));
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
    public function update(InvestorUpdateProfile $request, $id)
    {
        //
        $investor = User::where('id', $id)->first();
        $investor->name = $request->name;
        $investor->phone = $request->phone;
        $investor->email = $request->email;
        $investor->bank_id = $request->bankid;
        $investor->account_name = $request->accountname;
        $investor->account_number = $request->accountnumber;
        if(!empty($request->password)){
            if(empty($request->oldpassword)){
                return redirect()->back()->with('fail', 'Old password is required to change this password');
            }elseif(Hash::check($request->oldpassword, $investor->password)){
                $investor->password = Hash::make($request->password);
            }else{
                return redirect()->back()->with('fail', 'Old password not matched');
            }
        }
        if($request->avatarset=="notset"){
            $investor->addMediaFromRequest('avatar')->toMediaCollection('avatar');
        }
        if($request->avatarset=="set"){
            if($request->file("avatar")){
                $investor->delete($id);
                $investor->clearMediaCollection();
                $investor->addMediaFromRequest('avatar')->toMediaCollection("avatar");
            }
        }
        $investor->save();
        $bg ="bg-success";
        $icon = "mdi mdi-account-check";
        $message ='You update your profile ';
        Notification::send(Auth::user(), new InvestorNotification($bg, $icon, $message));

        return redirect()->route('usersdashboard')->with('success', 'Provile details updated successfully');
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
