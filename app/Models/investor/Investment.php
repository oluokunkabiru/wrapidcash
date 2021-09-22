<?php

namespace App\Models\investor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Investment extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public function investor(){
        return $this->belongsTo('App\Models\Investor');
    }
    public function coin(){
        return $this->belongsTo('App\Models\Coin');
    }
}
