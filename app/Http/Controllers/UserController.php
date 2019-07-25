<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    /**
     * sign up
     */
    public function signup(){
        return view('users.create');
}
}
