@extends("auth.layout")

@section("title", "Sign up for free!")

@section("form")

    <form action="{{ route("auth.register") }}" method="POST" class="form-sign-up" autocomplete="off">

        @csrf

        <div class="form-item form-item-double mb-4">
            <label for="first-name">First name</label>
            <input type="text" name="first_name" id="first-name"
                   maxlength="24" value="{{ old("first_name") }}" required>
            @error("first_name")
            <p class="form-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-item form-item-double mb-4">
            <label for="last-name">Last name</label>
            <input type="text" name="last_name" id="last-name"
                   maxlength="24" value="{{ old("last_name") }}" required>
            @error("last_name")
            <p class="form-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-item mb-4">
            <label for="email">Email</label>
            <input type="email" name="email" id="email"
                   maxlength="48" value="{{ old("email") }}" required>
            @error("email")
            <p class="form-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-item form-item-double mb-4">
            <label for="password">Password</label>
            <input type="password" name="password" id="password"
                   minlength="8" maxlength="24" required>
            @error("password")
            <p class="form-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-item form-item-double mb-4">
            <label for="password-confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password-confirmation"
                   minlength="8" maxlength="24" required>
        </div>

        <div class="form-item mb-3">
            <button type="submit">Sign up</button>
        </div>

        <div class="form-item mb-4">
            <p class="agreement">
                I agree to the
                <a href="{{ route("terms") }}" target="_blank">Terms of Service</a>
                and
                <a href="{{ route("privacy") }}" target="_blank">Privacy</a>
                &
                <a href="{{ route("security") }}" target="_blank">Security</a>
                Policy.
            </p>
        </div>

        <div class="form-item">
            <p>
                Do you have an account?
                <a href="{{ route("auth.sign-in") }}">
                    Sign in
                </a>
            </p>
        </div>

    </form>

@endsection
