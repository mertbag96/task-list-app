@php use Illuminate\Support\Carbon; @endphp
@extends("panel.app")

@section("title", "Show user | Panel")

@section("content")

    <div class="users">

        <div class="card card-user">

            <div class="card-header mb-4">

                <h1 class="card-title">Show User</h1>

                <a href="{{ route("panel.users.list") }}" class="btn-create">
                    Back to users
                </a>

            </div>

            <div class="user-information">

                <div class="d-flex justify-content-center w-100">

                    @switch($user->avatar)
                        @case(1)
                            <img src="{{ asset("assets/images/panel/avatars/male/1.png") }}" alt="Avatar"
                                 class="avatar shadow-sm">
                            @break
                        @case(2)
                            <img src="{{ asset("assets/images/panel/avatars/male/2.png") }}" alt="Avatar"
                                 class="avatar shadow-sm">
                            @break
                        @case(3)
                            <img src="{{ asset("assets/images/panel/avatars/male/3.png") }}" alt="Avatar"
                                 class="avatar shadow-sm">
                            @break
                        @case(4)
                            <img src="{{ asset("assets/images/panel/avatars/female/4.png") }}" alt="Avatar"
                                 class="avatar shadow-sm">
                            @break
                        @case(5)
                            <img src="{{ asset("assets/images/panel/avatars/female/5.png") }}" alt="Avatar"
                                 class="avatar shadow-sm">
                            @break
                        @case(6)
                            <img src="{{ asset("assets/images/panel/avatars/female/6.png") }}" alt="Avatar"
                                 class="avatar shadow-sm">
                            @break
                        @default
                            <img src="{{ asset("assets/images/panel/avatars/default.png") }}" alt="Avatar"
                                 class="avatar shadow-sm">
                    @endswitch

                </div>

                <div class="information">
                    <p class="m-0">
                        <strong class="me-1">First name:</strong>
                        {{ $user->first_name }}
                    </p>
                </div>

                <div class="information">
                    <p class="m-0">
                        <strong class="me-1">Last name:</strong>
                        {{ $user->last_name }}
                    </p>
                </div>

                <div class="information">
                    <p class="m-0">
                        <strong class="me-1">Birth date:</strong>
                        {{ Carbon::parse($user->birth_date)->format("d.m.Y") }}
                    </p>
                </div>

                <div class="information">
                    <p class="m-0">
                        <strong class="me-1">Email:</strong>
                        {{ $user->email }}
                    </p>
                </div>

                <div class="information">
                    <p class="m-0">
                        <strong class="me-1">Role:</strong>
                        {{ $user->role->name }}
                    </p>
                </div>

                <div class="information">
                    <p class="m-0">
                        <strong class="me-1">Team:</strong>
                        {{ $user->team->name ?? "Not in a team" }}
                    </p>
                </div>

                @can("update-users")
                <div class="w-100">
                    <a href="{{ route("panel.users.edit", $user->id) }}" class="btn-create">
                        Edit user
                    </a>
                </div>
                @endcan

            </div>

        </div>

        @unless(is_null($user->team))

            <div class="card card-user">

                <div class="card-header mb-4">

                    <h1 class="card-title">
                        {{ $user->team->name ?? "Team 1" }}
                    </h1>

                    <a href="{{ route("panel.users.list") }}" class="btn-create">
                        Show team
                    </a>

                </div>

                <div class="team-information">

                </div>

            </div>

        @endunless

    </div>

@endsection

@section("scripts")

    <script>

        const gender = "{{ $user->gender }}";

        $(document).ready(function () {

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
        setTimeout(function () {
            $(".alert").addClass("animate__fadeOutRight");
        }, 5000);
        @endif

    </script>

@endsection
