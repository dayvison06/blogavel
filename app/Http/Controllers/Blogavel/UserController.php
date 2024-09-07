<?php

namespace App\Http\Controllers\Blogavel;


use App\Http\Controllers\Controller;
use App\Services\Blogavel\UserServices;

class UserController extends Controller
{
    public function getUserName(){
        $userServices = new UserServices();
        return $userServices->getUserName();
    }
}
