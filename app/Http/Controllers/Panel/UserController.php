<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\User\StoreUserRequest;
use App\Http\Requests\Panel\User\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function list(): View
    {
        return view("panel.user.list");
    }

    public function get_users(): JsonResponse
    {
        if (Auth::user()->role->name === "Admin") {
            $users = User::all();
        } else {
            if (Auth::user()->team === null) {
                $users = User::whereNull("team_id")->get();
            } else {
                $users = User::where("team_id", Auth::user()->team->id)->get();
            }
        }

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
            ->addColumn("action", function () {
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

        $recent_users = User::latest()->take(10)->get();

        return view("panel.user.create", ["recent_users" => $recent_users]);
    }

    public function store(StoreUserRequest $request): RedirectResponse
    {
        User::create($request->validated());

        return redirect()->route("panel.users.list")->with("user_created", "User was successfully created.");
    }

    public function show(User $user): View
    {
        return view("panel.user.show", ["user" => $user]);
    }

    public function edit(User $user): View
    {
        if (Gate::denies('update-users', $user)) {
            abort(403);
        }

        return view("panel.user.edit", ["user" => $user]);
    }

    public function update(User $user, UpdateUserRequest $request): RedirectResponse
    {
        $user->update($request->validated());

        return redirect()->back()->with("user_updated", "User was successfully updated.");
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->back()->with("user_deleted", "User was successfully deleted.");
    }
}
