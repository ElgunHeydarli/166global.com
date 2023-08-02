<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }//funksiya bitdi



    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('index')->with('message','Uğurla daxil oldunuz');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }//funksiya bitdik



    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login')->with('message','Sistemnən çıxış etdiniz');
    }//funksiya bitdi

}
