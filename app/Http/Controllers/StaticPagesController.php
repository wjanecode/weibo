<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //
    /**
     * home主页
     */
    public function home(){
        return view('static_pages/home');
    }
    /**
     * help页面
     */
    public function help(){
        return view('static_pages/help');
    }
    /**
     * about页面
     */
    public function about(){
        return view('static_pages/about');
    }
}
