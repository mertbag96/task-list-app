<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Ramsey\Uuid\Type\Integer;

class TeamController extends Controller
{
    public function show(): View
    {
        return view("panel.team.show");
    }

    public function create(): View
    {
        return view("panel.team.create");
    }

    public function store(): Integer
    {
        return 1;
    }

    public function edit(): View
    {
        return view("panel.team.edit");
    }

    public function update(): Integer
    {
        return 1;
    }
}
