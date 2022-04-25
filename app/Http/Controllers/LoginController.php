<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
       /* if (!$user || !Hash::check($request->password, $user->password)) {
            return ["error" => "Wrong login credentials."];
        }*/
        return $user;
    }
}
