<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LogInRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\ResetPasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function sign_in(): View
    {
        return view("auth.sign-in");
    }
    public function log_in(LogInRequest $request): RedirectResponse
    {
        $credentials = $request->only("email", "password");
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route("panel.dashboard")->with("signed_in", "You successfully signed in.");
        }
        return redirect()->back()->with("invalid_credentials", "The email or password you entered is incorrect. Please check your credentials and try again!");
    }
    public function sign_up(): View
    {
        return view("auth.sign-up");
    }
    public function register(RegisterRequest $request): RedirectResponse
    {
        return redirect()->route("auth.sign-in")->with("registered", "You signed up successfully. Sign in now!");
    }
    public function forget_password(): View
    {
        return view("auth.forget-password");
    }
    public function reset_password(ResetPasswordRequest $request): View
    {
        return view("auth.forget-password")->with("success", "A password reset link was sent to your email.");
    }
    public function log_out(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route("auth.sign-in")->with("signed_out", "You signed out successfully.");
    }
}
