<?php

namespace App\Services\Blogavel;

use Illuminate\Support\Facades\Auth;

class UserServices
{

    public function getUserName(){
        $user = auth()->user();

        if(!$user){
            return false;
        }
        return 'Olá, '. $user->name;
    }



}
