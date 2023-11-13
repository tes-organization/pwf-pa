<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AutentikasiController extends Controller
{
    public function viewRegistrasi(){
        return view("autentikasi/registrasi");
    }
    public function viewMasuk(){
        return view("autentikasi/masuk");
    }

    public function registrasi(Request $request){
        $existingUserEmail = User::where('email', $request['email'])->first();
        if ($existingUserEmail) {
            $request->session()->flash('error', 'Surel Sudah Terdaftar.');
            // return redirect()->back();
        }

        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required|min:8|max:255',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $validated['role'] = 'user';

        User::create($validated);

        $request->session()->flash('success', "Register Succesfully !");

        return redirect('/masuk');
    }

    public function masuk(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(auth()->user()->role =='staff'){
                return redirect()->intended('/spot-staff'); 
            }
            if(auth()->user()->role =='user'){
                return redirect()->intended('/dasbor-spot'); 
            }
        }
        
        return back()->with('loginError','The provided credentials do not match our records !');
    }

    public function keluar(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/'); 
    }
}
