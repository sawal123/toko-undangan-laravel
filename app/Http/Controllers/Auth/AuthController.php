<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request as FacadesRequest;

class AuthController extends Controller
{
    //

    public function index()
    {
        $log = Auth::user();
        if($log){
            return redirect()->back();
        }
        return view('auth.login');
    }

    public function AuthLogin(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|max:255',
            'password' => 'required'
        ]);
        $result = User::where('email', $request->email)->first();
        if (!$result) {
            return redirect()->back()->withErrors([
                'message' => 'Email Tidak Terdaftar!',
            ])->onlyInput('email');
        } else {
            if (Auth::attempt($validate)) {
                $request->session()->regenerate();
                return redirect()->intended('dashboard');
            }else{
                return redirect()->back()->withErrors([
                    'message' => 'Password Salah!',
                ]);
            }
        }
    }
}
