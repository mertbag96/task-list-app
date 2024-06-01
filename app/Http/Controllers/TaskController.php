<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Ramsey\Uuid\Type\Integer;

class TaskController extends Controller
{
    public function show() : View
    {
        return view("task.show");
    }

    public function create() : View
    {
        return view("task.create");
    }

    public function store() : Integer
    {
        return 1;
    }

    public function edit() : View
    {
        return view("task.edit");
    }

    public function update() : Integer
    {
        return 1;
    }
}
