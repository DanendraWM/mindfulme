<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
// use Alert;
class authController extends Controller
{
    public function login()
    {
        return view('auth.login', ['title' => 'login']);
    }

    public function register()
    {
        return view('auth.register', ['title' => 'register']);
    }
    public function authlogin(request $request)
    {
        $validasi = $request->validate([
            // 'email' => ['required', 'email:dns'],
            'name' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($validasi)) {
            $request->session()->regenerate();
            if (auth()->user()->level == 'user') {
                Alert::info('login berhasil', 'Hai ' . auth()->user()->name);
                return redirect()->intended('/');
            } else {
                Alert::info('login berhasil', 'Hai ' . auth()->user()->name);
                return redirect()->intended('/');
            }
        } else {
            Alert::warning('login gagal', 'hayo pake akun orang ya');
            return back()->with('gagal', 'login anda gagal!');
        }
    }
    public function logout(request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Alert::success('logout berhasil', 'terima kasih');
        return redirect('/login');
    }

    public function regis(request $request)
    {
        // try {
            // return $request;
            $validasi = $request->validate([
                'name' => ['required', 'min:3', 'max:25'],
                'email' => ['required', 'unique:users', 'email:dns'],
                'password' => ['required', 'min:8'],
                // 'level' => ['required'],
            ]);
            $validasi['password'] = bcrypt($validasi['password']);
            User::create($validasi);
            Alert::info('Register berhasil', 'Hai ');
            return redirect('/login')->with('pesan', 'berhasil membuat akun');
        // } catch (\Throwable $th) {
        //     Alert::warning('login gagal', $th);
        //     return back()->with('gagal', 'login anda gagal!');
        // }
    }
}
