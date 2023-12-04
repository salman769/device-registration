<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function Register(Request $request){
        $shop = Auth::user();
        return view('welcome');
    }
}
