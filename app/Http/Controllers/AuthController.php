<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller {
    public function showLogin() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $user = User::where('username', $request->username)
                    ->where('password', $request->password)
                    ->first();

        if ($user) {
            $request->session()->put('user_id', $user->id);
            $request->session()->put('username', $user->username);
            $request->session()->put('role', $user->role);
            return redirect('/dashboard');
        }
        return back();
    }

    public function showRegister() {
        return view('auth.register');
    }

    public function register(Request $request) {
        User::create([
            'username' => $request->username,
            'password' => $request->password,
            'role' => $request->role
        ]);
        return redirect('/login');
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect('/login');
    }
}
