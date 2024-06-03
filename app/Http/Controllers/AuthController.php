<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function sign_in(): View
    {
        return view("auth.sign-in");
    }
    public function sign_up(): View
    {
        return view("auth.sign-up");
    }
}
