<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AuthRouteAPIController extends Controller
{
    public function authRouteAPI(Request $request){
        return $request->user();
    }

    public function login(Request $request){
        return view('auth.login');
    }

}
