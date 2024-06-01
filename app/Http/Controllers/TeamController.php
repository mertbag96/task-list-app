<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Ramsey\Uuid\Type\Integer;

class TeamController extends Controller
{
    public function show() : View
    {
        return view("team.show");
    }

    public function create() : View
    {
        return view("team.create");
    }

    public function store() : Integer
    {
        return 1;
    }

    public function edit() : View
    {
        return view("team.edit");
    }

    public function update() : Integer
    {
        return 1;
    }
}
