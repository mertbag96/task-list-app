<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Ramsey\Uuid\Type\Integer;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function list(): View
    {
        return view("panel.user.list");
    }

    public function get_users(): JsonResponse
    {
        $users = User::all();
        return DataTables::of($users)
            ->editColumn("role_id", function ($row) {
                $user = User::where("id", $row->id)->first();
                return $user->role->name;
            })
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
                return $row->birth_date;
            })
            ->editColumn("created_at", function ($row) {
                return $row->created_at;
            })
            ->addColumn("action", function ($row) {
                $user = User::where("id", Auth::user()["id"])->first();
                return $user->role->name;
            })
            ->rawColumns(["action"])
            ->toJson();
    }

    public function create(User $user): View
    {
        if (Gate::denies('create-users', $user)) {
            abort(403);
        }

        return view("panel.user.create");
    }

    public function store(): Integer
    {
        return 1;
    }

    public function show($id): View
    {
        $user = User::where("id", $id)->first();
        return view("panel.user.show", ["user" => $user]);
    }

    public function edit(User $user, $id): View
    {
        if (Gate::denies('update-users', $user)) {
            abort(403);
        }

        $user = User::where("id", $id)->first();

        return view("panel.user.edit", ["user" => $user]);
    }

    public function update(): Integer
    {
        return 1;
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->back()->with("user_deleted", "User was successfully deleted.");
    }
}
