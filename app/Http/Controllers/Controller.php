<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function home(): View
    {
        return view("website.home");
    }
    public function features(): View
    {
        return view("website.features");
    }
    public function help_center(): View
    {
        return view("website.help-center");
    }
    public function about(): View
    {
        return view("website.about");
    }
    public function blog(): View
    {
        return view("website.blog");
    }
    public function contact(): View
    {
        return view("website.contact");
    }
    public function terms(): View
    {
        return view("website.terms");
    }
    public function privacy(): View
    {
        return view("website.privacy");
    }
    public function security(): View
    {
        return view("website.security");
    }
}
