@extends("panel.app")

@section("title", "Profile - Account | Panel")

@section("content")

    <div class="profile">

        <div class="card card-profile">

            <div class="d-flex align-items-center w-100 mb-4">

                <img src="{{ asset("assets/images/panel/avatars/default.png") }}" alt="Avatar"
                     class="profile-avatar shadow-sm">

                <h1 class="card-title">Profile</h1>

            </div>

            <form action="{{ route("panel.account.update-profile") }}" method="POST"
                  class="form-profile" autocomplete="off">

                @csrf

                @method("PUT")

                <div class="form-element-gender">

                    <button type="button" class="gender" data-gender="male">
                        @if(!in_array($user->avatar, [1, 2, 3]))
                            <img src="{{ asset("assets/images/panel/avatars/male/1.png") }}" alt="Male">
                        @else
                            @switch($user->avatar)
                                @case(1)
                                    <img src="{{ asset("assets/images/panel/avatars/male/1.png") }}" alt="Male">
                                @break
                                @case(2)
                                    <img src="{{ asset("assets/images/panel/avatars/male/2.png") }}" alt="Male">
                                    @break
                                @case(3)
                                    <img src="{{ asset("assets/images/panel/avatars/male/3.png") }}" alt="Male">
                                    @break
                            @endswitch
                        @endif
                        <span>Male</span>
                    </button>

                    <button type="button" class="gender" data-gender="female">
                        @if(!in_array($user->avatar, [4, 5, 6]))
                            <img src="{{ asset("assets/images/panel/avatars/female/1.png") }}" alt="Female">
                        @else
                            @switch($user->avatar)
                                @case(4)
                                    <img src="{{ asset("assets/images/panel/avatars/female/1.png") }}" alt="Female">
                                    @break
                                @case(5)
                                    <img src="{{ asset("assets/images/panel/avatars/female/2.png") }}" alt="Female">
                                    @break
                                @case(6)
                                    <img src="{{ asset("assets/images/panel/avatars/female/3.png") }}" alt="Female">
                                    @break
                            @endswitch
                        @endif
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
                           value="{{ old("first_name", $user->first_name) }}" required>
                    @error("first_name")
                    <p class="form-error">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="form-element">
                    <label for="last-name">Last name</label>
                    <input type="text" name="last_name" id="last-name" maxlength="24"
                           value="{{ old("last_name", $user->last_name) }}" required>
                     @error("last_name")
                    <p class="form-error">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="form-element">
                    <label for="birth-date">Birth date</label>
                    <input type="date" name="birth_date" id="birth-date"
                           value="{{ old("birth_date", $user->birth_date) }}" required>
                     @error("birth_date")
                    <p class="form-error">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="form-element">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" maxlength="48"
                           value="{{ old("email", $user->email) }}" required>
                     @error("email")
                    <p class="form-error">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="form-element w-100">
                    <label for="team-id">Team</label>
                    <select name="team_id" id="team-id" required>
                        @foreach($teams as $team)
                            <option value="{{ $team->id }}" @if($team->id == $user->team->id) selected @endif>
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

                <button type="submit" class="btn-save me-2">Save</button>

            </form>

        </div>

        <div class="profile-extra">

            <div class="card card-profile card-change-password">

                <h1 class="card-sub-title mb-4">Change password</h1>

                <form action="{{ route("panel.account.change-password") }}" method="POST"
                      class="form-profile" autocomplete="off">

                    @csrf

                    @method("PUT")

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
                        <label for="password-confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password-confirmation"
                               minlength="8" maxlength="24" required>
                    </div>

                    <button type="submit" class="btn-change-password">
                        Change password
                    </button>

                </form>

            </div>

            <div class="card card-profile card-profile-avatar @if($user->gender == "unspecified") d-none @endif">

                <h1 class="card-sub-title mb-4">
                    Change avatar
                </h1>

                <form action="{{ route("panel.account.update-avatar") }}" method="POST"
                      class="form-profile" autocomplete="off">

                    @csrf

                    @method("PUT")

                    <div class="form-element-avatar">

                        @if($user->gender == "male")

                            <button type="button" class="avatar" data-avatar="1">
                                <img src="{{ asset("assets/images/panel/avatars/male/1.png") }}" alt="Avatar 1">
                            </button>

                            <button type="button" class="avatar" data-avatar="2">
                                <img src="{{ asset("assets/images/panel/avatars/male/2.png") }}" alt="Avatar 2">
                            </button>

                            <button type="button" class="avatar" data-avatar="3">
                                <img src="{{ asset("assets/images/panel/avatars/male/3.png") }}" alt="Avatar 3">
                            </button>

                        @else

                            <button type="button" class="avatar" data-avatar="4">
                                <img src="{{ asset("assets/images/panel/avatars/female/1.png") }}" alt="Avatar 1">
                            </button>

                            <button type="button" class="avatar" data-avatar="5">
                                <img src="{{ asset("assets/images/panel/avatars/female/2.png") }}" alt="Avatar 2">
                            </button>

                            <button type="button" class="avatar" data-avatar="6">
                                <img src="{{ asset("assets/images/panel/avatars/female/3.png") }}" alt="Avatar 3">
                            </button>

                        @endif

                        @error("avatar")
                        <p class="form-error">
                            {{ $message }}
                        </p>
                        @enderror

                        <label for="avatar" class="d-none"></label>
                        <input type="hidden" name="avatar" id="avatar">

                    </div>

                    <button type="submit" class="btn-avatar">
                        Change avatar
                    </button>

                </form>

            </div>

        </div>

    </div>

@endsection

@section("scripts")

    <script>

        const gender = "{{ $user->gender }}";
        const avatar = {{ $user->avatar }};

        $(document).ready( function () {

            fill_data();

        });

        $(".gender").on("click", function () {
            $(".gender").removeClass("active");
            $(this).addClass("active");
            $('#gender').val($(this).data("gender"));
        });

        $(".avatar").on("click", function () {
            $(".avatar").removeClass("active");
            $(this).addClass("active");
            $('#avatar').val($(this).data("avatar"));
        });

        function fill_data() {
            $(`.gender[data-gender="${gender}"]`).addClass("active");
            $('#gender').val(gender);
            $(`.avatar[data-avatar="${avatar}"]`).addClass("active");
            $('#avatar').val(avatar);
        }

        @if(session()->has("profile_updated"))
        $(".alert .fa-check").removeClass("d-none");
        $(".alert p").text("{{ session("profile_updated") }}");
        $(".alert").removeClass("d-none");
        setTimeout( function () {
            $(".alert").addClass("animate__fadeOutRight");
        }, 5000);
        @endif

        @if(session()->has("password_change"))
        $(".alert .fa-check").removeClass("d-none");
        $(".alert p").text("{{ session("password_change") }}");
        $(".alert").removeClass("d-none");
        setTimeout( function () {
            $(".alert").addClass("animate__fadeOutRight");
        }, 5000);
        @endif

        @if(session()->has("avatar_updated"))
        $(".alert .fa-check").removeClass("d-none");
        $(".alert p").text("{{ session("avatar_updated") }}");
        $(".alert").removeClass("d-none");
        setTimeout( function () {
            $(".alert").addClass("animate__fadeOutRight");
        }, 5000);
        @endif

    </script>

@endsection
