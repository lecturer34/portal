<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if( !$token = auth('api')->attempt($credentials) ){
            return response()->json(['error'=>'Unauthorized'], 401);
        }
        return response()->json(['token'=>$token]);
    }

    public function logout()
    {
        auth('api')->logout();
        return response()->json(['message'=>'successfully logged out']);
    }
}
