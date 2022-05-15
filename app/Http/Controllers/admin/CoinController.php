<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CoinUpdateRequest;
use App\Http\Requests\WrapcoinRequest;
use App\Models\Coin;
use Illuminate\Http\Request;

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
        $coins = Coin::orderBy('id', 'desc')->get();
        return view('users.admin.coin.index', compact(['coins']));
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
    public function store(WrapcoinRequest $request)
    {
        //
        $coin = new Coin();
        $coin->name = $request->name;
        $coin->price = $request->price;
        $coin->addMediaFromRequest('avatar')->toMediaCollection('coin-avatar');
        $coin->save();
        return redirect()->back()->with('success', 'New wrap coin added successfully');
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

     public function disable($id){
        $coin = Coin::where('id', $id)->first();
        $coin->status = "disabled";
        $coin->update();
        return redirect()->back()->with('success', 'Coin disabled successfully');


     }

     public function enable($id){
        $coin = Coin::where('id', $id)->first();
        $coin->status = "active";
        $coin->update();
        return redirect()->back()->with('success', 'Coin enabled successfully');


     }
    public function update(CoinUpdateRequest $request, $id)
    {
        //
        $coin = Coin::where('id', $id)->first();
        $coin->price = $request->price;
        $coin->name = $request->name;
        if($request->file("avatar")){
            $coin->delete($id);
            $coin->clearMediaCollection();
            $coin->addMediaFromRequest('avatar')->toMediaCollection("coin-avatar");
        }
        $coin->save();
        return redirect()->back()->with('success', 'Coin update successfully');
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
