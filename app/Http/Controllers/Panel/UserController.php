<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Ramsey\Uuid\Type\Integer;

class UserController extends Controller
{
    public function show(): View
    {
        return view("panel.user.show");
    }

    public function create(): View
    {
        return view("panel.user.create");
    }

    public function store(): Integer
    {
        return 1;
    }

    public function edit(): View
    {
        return view("panel.user.edit");
    }

    public function update(): Integer
    {
        return 1;
    }
}
