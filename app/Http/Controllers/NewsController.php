<?php

namespace App\Http\Controllers;

use App\Http\Requests\newsRequst;
use App\Models\News;
use App\Notifications\InvestorNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class NewsController extends Controller
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
    public function store(newsRequst $request)
    {
        //
        $news = new News();
        $news->news = $request->news;
        $news->save();
        return redirect()->back()->with('success', 'News flash added successfully');
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
        $news = News::where('id', $id)->first();
        $news->news = $request->news;
        $news->update();
        return redirect()->back()->with('success', 'News flash updated successfully');
    }
    public function disables($id){
        $user = News::where('id', $id)->first();
        $user->status = "disabled";
        $user->update();
        $bg ="bg-success";
        $icon = "  mdi mdi-toggle-switch-off  ";
        $message ='You delete news feed';
        Notification::send(Auth::user(), new InvestorNotification($bg, $icon, $message));
        return redirect()->back()->with('delete', ' disabled successfully');


     }

     public function enable($id){
        $user = News::where('id', $id)->first();
        $user->status = "active";
        $user->update();
        $bg ="bg-warning";
        $icon = "mdi mdi-toggle-switch";
        $message ='You diabled news feed';
        Notification::send(Auth::user(), new InvestorNotification($bg, $icon, $message));
        return redirect()->back()->with('success', ' enabled successfully');

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
        $news = News::where('id', $id)->first();
        $news->forceDelete();
        $bg ="bg-danger";
        $icon = " mdi mdi-delete  ";
        $message ='You delete news feed';
        Notification::send(Auth::user(), new InvestorNotification($bg, $icon, $message));
        return redirect()->back()->with('delete', 'News feed successfullt deleted');

    }
}
