<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Carbon;
use Illuminate\View\View;
use Ramsey\Uuid\Type\Integer;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function show(): View
    {
        return view("panel.user.show");
    }

    public function get_users(): JsonResponse
    {
        $users = User::all();
        return DataTables::of($users)
            ->editColumn("team_id", function ($row) {
                if ($row->team_id == null) {
                    return "-";
                } else {
                    return $row->team->name;
                }
            })
            ->editColumn("gender", function ($row) {
                if ($row->gender == "male") {
                    return "Male";
                } else if ($row->gender == "female") {
                    return "Female";
                } else {
                    return "Unspecified";
                }
            })
            ->editColumn("birth_date", function ($row) {
                if ($row->birth_date == null) {
                    return "-";
                } else {
                    return Carbon::parse($row->birth_date)->format("d.m.Y");
                }
            })
            ->editColumn("created_at", function ($row) {
                return Carbon::parse($row->created_at)->format("d.m.Y");
            })
            ->toJson();
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
