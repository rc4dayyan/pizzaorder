<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login( Request $request) {
        $login = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        if( !Auth::attempt($login) ){
            return response(['message'=>'Invalid login credential']);
        }

        $accessToken = Auth::user()->createToken('authToken')->accessToken;

        return response(['user'=>Auth::user(), 'access_token'=>$accessToken]);

    }
}
