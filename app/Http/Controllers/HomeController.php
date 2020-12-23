<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function index(){
        return view('items.index');
    }

    public function data(){
        return view('items.data');
    }
}
