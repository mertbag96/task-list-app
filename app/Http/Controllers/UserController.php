<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Ramsey\Uuid\Type\Integer;

class UserController extends Controller
{
    public function show() : View
    {
        return view("user.show");
    }

    public function create() : View
    {
        return view("user.create");
    }

    public function store() : Integer
    {
        return 1;
    }

    public function edit() : View
    {
        return view("user.edit");
    }

    public function update() : Integer
    {
        return 1;
    }
}
