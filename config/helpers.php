<?php

use App\Models\Configuration;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


if(! function_exists('appSettings')){
        function appSettings(){
            $config = Configuration::first();
        return $config;
    }

}

?>
