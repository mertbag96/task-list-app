@extends("auth.layout")

@section("title", "Sign in to Task List")

@section("form")

    <form action="{{ route("auth.log-in") }}" method="POST" autocomplete="off">

        @csrf

        <div class="form-item mb-4">
            <label for="email">Email</label>
            <input type="email" name="email" id="email"
                   maxlength="48" value="{{ old("email") }}" required>
            @error("email")
            <p class="form-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-item mb-4">
            <label for="password">Password</label>
            <input type="password" name="password" id="password"
                   minlength="8" maxlength="24" required>
            @error("password")
            <p class="form-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-item mb-4">
            <a href="{{ route("auth.forget-password") }}">
                Forgot password?
            </a>
        </div>

        <div class="form-item mb-4">
            <button type="submit">Sign in</button>
        </div>

        <div class="form-item">
            <p>
                Don't have an account?
                <a href="{{ route("auth.sign-up") }}">
                    Sign up
                </a>
            </p>
        </div>

    </form>

@endsection

@section("scripts")

    @if(session()->has("invalid_credentials"))

        <script>
            $(".alert .fa-exclamation").removeClass("d-none");
            $(".alert p").text("{{ session("invalid_credentials") }}");
            $(".alert").removeClass("d-none");
            setTimeout( function () {
                $(".alert").addClass("animate__fadeOutRight");
            }, 5000);
        </script>

    @endif

    @if(session()->has("signed_out"))

        <script>
            $(".alert .fa-check").removeClass("d-none");
            $(".alert p").text("{{ session("signed_out") }}");
            $(".alert").removeClass("d-none");
            setTimeout( function () {
                $(".alert").addClass("animate__fadeOutRight");
            }, 5000);
        </script>

    @endif

    @if(session()->has("registered"))

        <script>
            $(".alert .fa-check").removeClass("d-none");
            $(".alert p").text("{{ session("registered") }}");
            $(".alert").removeClass("d-none");
            setTimeout( function () {
                $(".alert").addClass("animate__fadeOutRight");
            }, 5000);
        </script>

    @endif

@endsection
