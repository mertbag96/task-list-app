<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\Account\ChangePasswordRequest;
use App\Http\Requests\Panel\Account\UpdateAvatarRequest;
use App\Http\Requests\Panel\Account\UpdateProfileRequest;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AccountController extends Controller
{
    public function profile(): View
    {
        $teams = Team::all();
        $user = User::where("id", auth()->user()["id"])->first();
        return view("panel.account.profile", [
            "user" => $user,
            "teams" => $teams,
        ]);
    }

    public function update_profile(UpdateProfileRequest $request): RedirectResponse
    {
        $user = User::where("id", auth()->user()["id"])->first();

        $current_gender = $user->gender;

        $user->update($request->validated());

        if ($current_gender !== $user->gender) {
            $new_avatar = match ($user->gender) {
                "male" => 1,
                "female" => 4,
                default => 0,
            };

            $user->update(['avatar' => $new_avatar]);
        }

        return redirect()->back()->with("profile_updated", "Your profile was successfully updated.");
    }

    public function change_password(ChangePasswordRequest $request): RedirectResponse
    {
        $user = User::where("id", auth()->user()["id"])->first();
        $user->update(["password" => $request->password]);
        return redirect()->back()->with("password_change", "Your password was successfully changed.");
    }

    public function update_avatar(UpdateAvatarRequest $request): RedirectResponse
    {
        $user = User::where("id", auth()->user()["id"])->first();
        $user->update(["avatar" => $request->avatar]);
        return redirect()->back()->with("avatar_updated", "Your avatar was successfully updated.");
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
