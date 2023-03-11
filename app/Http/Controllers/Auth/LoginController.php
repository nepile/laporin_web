<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function v_login()
    {
        $title = 'Portal Login';
        return view('auth.login', compact('title'));
    }
    public function handle_login(Request $request)
    {
        $credentials = $request->validate(
            [
                'nip' => 'required',
                'password' => 'required'
            ],
            [
                'nip.required' => 'NIP tidak boleh kosong',
                'password.required' => 'Password tidak boleh kosong',
            ]
        );

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('overview');
        }

        return redirect()->back()->with('error', 'NIP atau password salah!');
    }
}
