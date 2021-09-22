<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Illuminate\Http\Request;

class ReferralController extends Controller
{
    //
    public function referralLink($id){
        $ref = Investor::with(['user'])->where('username', $id)->first();
        // return $ref;
        return view('auth.register', compact(['ref']));
    }
}
