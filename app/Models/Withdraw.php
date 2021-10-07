<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function investor(){
        return $this->belongsTo('App\Models\Investor');
    }

    public function investment(){
        return $this->belongsTo('App\Models\Coin');
    }
    public function bank(){
        return $this->belongsTo('App\Models\Bank');
    }
}
