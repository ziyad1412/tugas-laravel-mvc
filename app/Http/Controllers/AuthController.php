<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(){
        return view('welcome');
    }

    public function welcome_post(Request $request){
        // dd($request->all());
        $nama = $request->nama;
        $nama2 = $request->nama2;
        return view('welcome', compact('nama','nama2'));
    }
}
