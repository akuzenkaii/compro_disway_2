<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // Arahin semua role ke halaman home
    protected function redirectTo()
    {
        return '/'; // atau '/home'
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
