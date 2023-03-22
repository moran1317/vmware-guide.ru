<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginApiController extends Controller
{
    public function login(Request $request)
    {
        //dd($request)
        $user = User::where([
            'email' => $request->email,
            'password' => $request->password,
        ])->first();
        return $user;
    }
}
