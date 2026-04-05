<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            return redirect('/home');
        }

        return back()->with('error', 'Email / password salah');
    }

    public function registration()
    {
        return view('registration');
    }

    public function register(Request $request)
    {
        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/registration')->with('success', 'Registrasi berhasil');
    }

    public function home()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        return view('home', [
            'user' => Auth::user()
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}