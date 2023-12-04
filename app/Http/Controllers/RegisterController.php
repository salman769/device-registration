<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function Register(Request $request){
        $shop = Auth::user();
        return view('welcome');
    }
}
