<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function WarrantyRegister(Request $request){
        $shop = Auth::user();
        return view('welcome');
    }

    public function Registration(Request $request){
        $shop = Auth::user();
        $shop->shopify_namespace = $request->product_name;
        $shop->save();
        return response([
            'name'=>$request->product_name,
        ]);
    }

}
