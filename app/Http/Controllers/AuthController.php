<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function registerPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;

        $user->save();

        return back()->with('success', 'Register successfully');
    }
    public function login()
    {
        return view('login');
    }
    public function loginpost(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->route("admin")->with('success', 'Logged in successfully.');
            } elseif ($user->role == 'user') {
                return redirect()->route("user")->with('success', 'Logged in successfully.');
            } elseif ($user->role == 'guide') {
                return redirect()->route("guide")->with('success', 'Logged in successfully.');
            }
        }

        return back()->with('error', 'Invalid email or password.');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
