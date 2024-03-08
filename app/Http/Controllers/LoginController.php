<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        return $request;
    }
    public function register(Request $request)
    {
        $validaterequest = $request->validate([
            "email" => 'required',
            "name" => 'required',
            "password" => 'required'
        ]);

        $validaterequest['password'] = Hash::make($request->password);
        $user = User::create($validaterequest);
        return response([
        "user" => $user,
        "message" => "user created"
        ]);
    }
    public function userlist()
    {
        return response([
            "route access"
        ]);
    }
}
