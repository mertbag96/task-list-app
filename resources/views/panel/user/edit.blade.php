@extends("panel.app")

@section("title", "Edit user | Panel")

@section("content")

    <div class="users">

        <div class="card card-user">

            <div class="card-header mb-4">

                <h1 class="card-title">Edit User</h1>

                <a href="{{ route("panel.users.list") }}" class="btn-create">
                    Back to users
                </a>

            </div>

            <form action="{{ route("panel.users.update", $user->id) }}" method="POST"
                  class="form-user" autocomplete="off">

                @csrf

                @method("PUT")

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

                <div class="form-element">
                    <label for="role-id">Role</label>
                    <select name="role_id" id="role-id">
                        <option value="">Select a role</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}" @if($user->role_id == $role->id) selected @endif>
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
                            <option value="{{ $team->id }}" @if($user->team_id == $team->id) selected @endif>
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

                <div class="form-element w-100">
                    <div class="change-password">
                        <input type="checkbox" name="switch" id="switch" @error("password") checked @enderror>
                        <label for="switch">Change password</label>
                    </div>
                </div>

                <div class="form-element animate__animated animate__fadeIn d-none">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password"
                           minlength="8" maxlength="24" disabled required>
                    @error("password")
                    <p class="form-error">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="form-element animate__animated animate__fadeIn d-none">
                    <label for="password-confirmation">Confirm password</label>
                    <input type="password" name="password_confirmation" id="password-confirmation"
                           minlength="8" maxlength="24" disabled required>
                </div>

                <div class="w-100">
                    <button type="submit" class="btn-save">Save</button>
                </div>

            </form>

        </div>

    </div>

@endsection

@section("scripts")

    <script>

        const gender = "{{ $user->gender }}";

        $(document).ready( function () {

            fill_data();

        });

        $(".gender").on("click", function () {
            $(".gender").removeClass("active");
            $(this).addClass("active");
            $('#gender').val($(this).data("gender"));
        });

        $("#switch").on("change", function () {
            if ($(this).prop("checked")) {
                $("#password").prop("disabled", false);
                $("#password").parent().removeClass("d-none");
                $("#password-confirmation").prop("disabled", false);
                $("#password-confirmation").parent().removeClass("d-none");
            } else {
                $("#password").prop("disabled", true);
                $("#password").parent().addClass("d-none");
                $("#password-confirmation").prop("disabled", true);
                $("#password-confirmation").parent().addClass("d-none");
            }
        });

        function fill_data() {
            $(`.gender[data-gender="${gender}"]`).addClass("active");
            $('#gender').val(gender);
        }

        @error("password")
        $("#password").prop("disabled", false);
        $("#password").parent().removeClass("d-none");
        $("#password-confirmation").prop("disabled", false);
        $("#password-confirmation").parent().removeClass("d-none");
        @enderror

        @if(session()->has("user_updated"))
        $(".alert .fa-check").removeClass("d-none");
        $(".alert p").text("{{ session("user_updated") }}");
        $(".alert").removeClass("d-none");
        setTimeout( function () {
            $(".alert").addClass("animate__fadeOutRight");
        }, 5000);
        @endif

    </script>

@endsection
