<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

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
