<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory;
    function username($name){
        $username = strtolower(str_replace(" ", "_", $name));
        $last = Investor::orderBy('id', 'desc')->where('username','LIKE','%'.$username.'%')->first();
        if($last != null){
            $prevUname = $last->username;
           $extractUname = explode($username, $prevUname);
        //    $extractedUname = $extractUname[0];
           $number = $extractUname[1];
           $newNumber  = isset($number) && is_numeric($number)?$number+1:0;
            $newUname = $username.$newNumber;
           return $newUname;
       }
       return $username;
    }
}
