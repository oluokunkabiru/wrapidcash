<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Notifications\InvestorNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = Role::orderBy('id', 'desc')->get();
        return view('users.admin.role.index', compact(['roles']));
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
        Role::create(['name' => $request->role]);
        $bg ="bg-info";
        $icon = "mdi mdi-account-key";
        $message ='You added new role ' .$request->role;
        Notification::send(Auth::user(), new InvestorNotification($bg, $icon, $message));

        return redirect()->back()->with('success', 'New role '. $request->role. ' added success');

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
        $role = Role::where('id', $id)->first();
        $role->name = $request->role;
        $role->update();
        $bg ="bg-warning";
        $icon = "mdi mdi-table-edit ";
        $message ='You edit role  ' .$request->role;
        Notification::send(Auth::user(), new InvestorNotification($bg, $icon, $message));

        return redirect()->back()->with('success', 'Role '. $role->name. ' updated successfully');

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
        $role = Role::where('id', $id)->first();
        $role->forceDelete();
        $bg ="bg-danger";
        $icon = " mdi mdi-delete  ";
        $message ='You delete ' .$role->name;
        Notification::send(Auth::user(), new InvestorNotification($bg, $icon, $message));

        return redirect()->back()->with('delete', 'Role '. $role->name. ' deleted successfully');

    }
}
