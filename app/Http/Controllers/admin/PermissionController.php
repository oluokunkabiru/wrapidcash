<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Notifications\InvestorNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $permisions = Permission::orderBy('id', 'desc')->get();

        $roles = Role::orderBy('id', 'desc')->get();
        $myrole = "";//Auth::user()->getRoleNames()[0];
        $authrole = "";//Role::findByName($myrole);

        return view('users.admin.permission.index', compact(['permisions','authrole', 'roles']));

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
        $role = Role::findByName($request->role);
        // return $role;
         $role->givePermissionTo($request->permission);
        //  $icon = "fa fa-thumbs-up";
         $message ='You assigned  '. $request->permission. ' to '. $request->role ;

       //   dispatch(new ProcessNotification($icon,$message));
       $bg ="bg-success";
       $icon = " mdi mdi-book-plus   ";
       Notification::send(Auth::user(), new InvestorNotification($bg, $icon, $message));

       //   ProcessNotification::dispatch($icon, $message);
       return ucfirst($request->role)." added ". $request->permission." permission";
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
        $role = Role::findByName($request->role);
        // return $role;
         $role->givePermissionTo($request->permission);
         $message = 'You assigned  '. $request->permission. ' to '. $request->role;
         $bg ="bg-success";
         $icon = " mdi mdi-book-plus   ";
         Notification::send(Auth::user(), new InvestorNotification($bg, $icon, $message));
        // dispatch(new ProcessNotification());

        return ucfirst($request->role)." added ". $request->permission." permission";

    }
    public function removepermission(Request $request){
        $role = Role::findByName($request->role);
        $role->revokePermissionTo($request->permission);

        $message = 'You withdraw '. $request->permission. ' from '. $request->role;
        $bg ="bg-danger";
        $icon = " mdi mdi-delete  ";
        Notification::send(Auth::user(), new InvestorNotification($bg, $icon, $message));
        // dispatch(new ProcessNotification());

        // $this->dispatch(new ProcessNotification($icon, $message));
        // ProcessNotification::dispatch($icon, $message);
        // Notification::send(Auth::user(), new OffenderNotification($icon, $message))


        // Notification::send(Auth::user(), new OffenderNotification($icon,  ));

        return  ucfirst($request->permission)." permission withdraw from " .ucfirst($request->role);

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
