<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Staffsrequest;
use App\Http\Requests\StaffUpdateProfile;
use App\Models\User;
use App\Notifications\InvestorNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::orderBy('id', 'desc')->get();
        return view('users.admin.user.index', compact(['users']));
    }

    public function disables($id){
        $user = User::where('id', $id)->first();
        $user->status = "disabled";
        $user->update();
        return redirect()->back()->with('delete', $user->name .' disabled successfully');


     }

     public function enable($id){
        $user = User::where('id', $id)->first();
        $user->status = "active";
        $user->update();
        return redirect()->back()->with('success', $user->name .' enabled successfully');

     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::orderBy('id', 'desc')->get();
        return view('users.admin.user.add-user', compact(['roles']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Staffsrequest $request)
    {
        //
        // return $request;
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = "admin";
        $user->password = Hash::make($request->phone);
        $user->assignRole($request->role);
        $user->save();
        $bg ="bg-success";
        $icon = " mdi mdi-account-star ";
        $message ='New staff with '. $request->role .' role added successfully';
        Notification::send(Auth::user(), new InvestorNotification($bg, $icon, $message));
        return redirect()->route('users.index')->with('success', 'New staff added successfully');
    }

    public function readNotification($id){
        // return $id;
        $userUnreadNotification= auth()->user()->notifications->find($id);
        // return $userUnreadNotification;
        if($userUnreadNotification) {
            $userUnreadNotification->markAsRead();
            return back();
        }

    }
    public function readAllNotification(){
        $notification = auth()->user()->unreadNotifications;
        // return $notification;
        if($notification) {
            $notification->markAsRead();
        }
        return redirect()->back();

    }
    public function profile(){
        return view('users.admin.user.update');
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
    public function update(StaffUpdateProfile $request, $id)
    {
        //
        $investor = User::where('id', $id)->first();
        $investor->name = $request->name;
        $investor->phone = $request->phone;
        $investor->email = $request->email;
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

        return redirect()->route('admindashboard')->with('success', 'Provile details updated successfully');

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
