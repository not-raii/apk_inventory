<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Auth\Events\Attempting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login',
                [
            "title" => "Login"
        ]);
    }

    public function auth(Request $request){
        
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'email wajib diisi',
            'password.required' => 'password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password, 
        ];

        if(Auth::guard('admin')->attempt($infologin)) {
            return redirect('dashboard');
         } elseif(Auth::guard('users')->attempt($infologin)){
            return redirect('dashboard');
        }
         return redirect('login')->withErrors('kesalahan pada username atau password')->withInput();
    }

    function logout()
    {
        Auth::logout();
        return  redirect('login');
    }

}
