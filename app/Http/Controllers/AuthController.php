<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function sign_in(): View
    {
        return view("auth.sign-in");
    }
    public function log_in(Request $request): RedirectResponse
    {
        return redirect()->route("panel.dashboard")->with("success", "Welcome back!");
    }
    public function sign_up(): View
    {
        return view("auth.sign-up");
    }
    public function register(Request $request): View
    {
        return view("panel.dashboard")->with("success", "Your account was successfully created. Sign in now!");
    }
    public function forget_password(): View
    {
        return view("auth.forget-password");
    }
    public function reset_password(Request $request): View
    {
        return view("auth.forget-password")->with("success", "A password reset link was sent to your email.");
    }
}
