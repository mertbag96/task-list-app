@php use Illuminate\Support\Carbon; @endphp
@extends("panel.app")

@section("title", "Create user | Panel")

@section("content")

    <div class="users">

        <div class="card card-user">

            <div class="card-header mb-4">

                <h1 class="card-title">Create User</h1>

                <a href="{{ route("panel.users.list") }}" class="btn-create">
                    Back to users
                </a>

            </div>

            <form action="{{ route("panel.users.store") }}" method="POST" class="form-user" autocomplete="off">

                @csrf

                <div class="form-element-gender w-100">

                    <button type="button" class="gender" data-gender="male">
                        <img src="{{ asset("assets/images/panel/avatars/male/1.png") }}" alt="Male">
                        <span>Male</span>
                    </button>

                    <button type="button" class="gender" data-gender="female">
                        <img src="{{ asset("assets/images/panel/avatars/female/1.png") }}" alt="Female">
                        <span>Female</span>
                    </button>

                    <button type="button" class="gender" data-gender="unspecified">
                        <img src="{{ asset("assets/images/panel/avatars/default.png") }}" alt="Unspecified">
                        <span>Unspecified</span>
                    </button>

                    @error("gender")
                    <p class="form-error">
                        {{ $message }}
                    </p>
                    @enderror

                    <label for="gender" class="d-none"></label>
                    <input type="hidden" name="gender" id="gender">

                </div>

                <div class="form-element">
                    <label for="first-name">First name</label>
                    <input type="text" name="first_name" id="first-name" maxlength="24"
                           value="{{ old("first_name") }}" required>
                    @error("first_name")
                    <p class="form-error">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="form-element">
                    <label for="last-name">Last name</label>
                    <input type="text" name="last_name" id="last-name" maxlength="24"
                           value="{{ old("last_name") }}" required>
                    @error("last_name")
                    <p class="form-error">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="form-element">
                    <label for="birth-date">Birth date</label>
                    <input type="date" name="birth_date" id="birth-date"
                           value="{{ old("birth_date") }}" required>
                    @error("birth_date")
                    <p class="form-error">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="form-element">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" maxlength="48"
                           value="{{ old("email") }}" required>
                    @error("email")
                    <p class="form-error">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="form-element">
                    <label for="role-id">Role</label>
                    <select name="role_id" id="role-id" required>
                        <option value="">Select a role</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}" @if(old("role_id") == $role->id) selected @endif>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                    @error("role_id")
                    <p class="form-error">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="form-element">
                    <label for="team-id">Team</label>
                    <select name="team_id" id="team-id">
                        <option value="">Select a team</option>
                        @foreach($teams as $team)
                            <option value="{{ $team->id }}" @if(old("team_id") == $team->id) selected @endif>
                                {{ $team->name }}
                            </option>
                        @endforeach
                    </select>
                    @error("team_id")
                    <p class="form-error">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="form-element">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password"
                           minlength="8" maxlength="24" required>
                    @error("password")
                    <p class="form-error">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="form-element">
                    <label for="password-confirmation">Confirm password</label>
                    <input type="password" name="password_confirmation" id="password-confirmation"
                           minlength="8" maxlength="24" required>
                </div>

                <div class="w-100">
                    <button type="submit" class="btn-save">Save</button>
                </div>

            </form>

        </div>

        <div class="card card-user">

            <div class="card-header mb-4">

                <h1 class="card-title">Lastly created users</h1>

            </div>

            <div class="list-group">

                @foreach($recent_users as $recent_user)

                    <a href="{{ route("panel.users.show", $recent_user->id) }}" target="_blank"
                       class="list-group-item list-group-item-action">

                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">
                                {{ $recent_user->first_name . " " . $recent_user->last_name }}
                            </h5>
                            <small>
                                @php
                                $day_difference = Carbon::parse($recent_user->created_at)->diffInDays(Carbon::now());
                                $hours_difference = Carbon::parse($recent_user->created_at)->diffInHours(Carbon::now());
                                $minutes_difference = Carbon::parse($recent_user->created_at)->diffInMinutes(Carbon::now());
                                $seconds_difference = Carbon::parse($recent_user->created_at)->diffInSeconds(Carbon::now());
                                @endphp

                                @if($day_difference > 0)
                                    {{ $day_difference }} day{{ $day_difference > 1 ? 's' : '' }} ago
                                @else
                                    @if($hours_difference > 0)
                                        {{ $hours_difference }} hour{{ $hours_difference > 1 ? 's' : '' }} ago
                                    @else
                                        @if($minutes_difference >= 1)
                                            {{ $minutes_difference }} minute{{ $minutes_difference > 1 ? 's' : '' }} ago
                                        @else
                                            {{ $seconds_difference }} second{{ $seconds_difference > 1 ? 's' : '' }} ago
                                        @endif
                                    @endif
                                @endif

                            </small>
                        </div>

                        <p class="m-0" class="time">
                            {{ $recent_user->role->name }}
                        </p>

                    </a>

                @endforeach

            </div>

        </div>

    </div>

@endsection

@section("scripts")

    <script>

        const gender = '{{ old("gender") }}';

        if (!["", " ", null].includes(gender)) {
            $(".gender").removeClass("active");
            $(`.gender[data-gender="${gender}"]`).addClass("active");
            $('#gender').val(gender);
        }

        $(".gender").on("click", function () {
            $(".gender").removeClass("active");
            $(this).addClass("active");
            $('#gender').val($(this).data("gender"));
        });

    </script>

@endsection
