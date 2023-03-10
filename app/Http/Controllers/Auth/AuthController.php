<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function v_login()
    {
        $title = 'Portal Login';
        return view('auth.login', compact('title'));
    }
}
