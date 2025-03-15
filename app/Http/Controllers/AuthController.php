<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function login()
    {

        return view('auth.login');
    }
    public function postLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        $credentials = ['name' => $request->username, 'password' => $request->password];

        if (Auth::attempt($credentials)) {
            return redirect()->route('index')->with('success', 'Login successful');
        }

        return back()->withErrors(['login' => 'Invalid credentials'])->withInput();
    }

    public function signup()
    {
        return view('auth.signup');
    }

    public function postSignup(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:4|confirmed',
        ]);

        // dd($request);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        // $user->save();

        return redirect()->route('login')->with('success', 'Account created successfully. Please log in.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout Successful');
    }


}
