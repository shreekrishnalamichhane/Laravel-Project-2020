<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = "Home";
        return view ('index',compact('title'));
    }
    public function about(){
        $title = "About";
        return view ('about',compact('title'));
    }
    public function dashboard(){
        $title = "Dashboard";
        return view ('dashboard',compact('title'));
    }
}
