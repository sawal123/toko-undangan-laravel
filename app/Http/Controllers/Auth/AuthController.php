<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
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

    public function authGoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function googleCallback(){
        try{
            $user = Socialite::driver('google')->user();
            // dd($user);
            $finduser = User::where('id_google', $user->getId())->first();
            if($finduser){
                Auth::login($finduser);
                return redirect()->intended('/dashboard');
            }else{
                // dd($user);
                $users=User::where('email', $user->email)->first();
                if($users){
                    $users->id_google = $user->getId();
                    $users->save();
                    return redirect('/dashboard');
                }
                $newUser = User::create([
                    'uid'=> Str::uuid(),
                    'name'=> $user->name,
                    'email'=> $user->email,
                    'id_google'=> $user->getId(),
                    'image'=> $user->avatar,
                    'password'=> bcrypt('sawal123'),
                    // 'phone'=> NULL
                ]);
                // dd($newUser);
                $newUser->assignRole('costumer');
                Auth::login($newUser);
                return redirect('/dashboard');
            }
        }catch(\Throwable $th){
            // dd('KEsalahan');
            return redirect()->route('login')->withErrors(['message'=>'Terjadi kesalahan']);
        }
    }
    
}
