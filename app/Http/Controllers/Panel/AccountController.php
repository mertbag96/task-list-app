<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AccountController extends Controller
{
    public function profile(): View
    {
        return view("panel.account.profile");
    }
    public function messages(): View
    {
        return view("panel.account.messages");
    }
    public function notifications(): View
    {
        return view("panel.account.notifications");
    }
}
