<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): View
    {
        auth()->loginUsingId(1);

        if(auth()->check()){
            return view('admin.dashboard.index');
        }else{
            return view('client.auth.login.index');
        }

    }
}
