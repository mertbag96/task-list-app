@extends("auth.layout")

@section("title", "Sign up for free!")

@section("form")

    <form action="{{ route("auth.register") }}" method="POST" class="form-sign-up" autocomplete="off">

        @csrf

        <div class="form-item form-item-double mb-4">
            <label for="first-name">First name</label>
            <input type="text" name="first_name" id="first-name" required>
        </div>

        <div class="form-item form-item-double mb-4">
            <label for="last-name">Last name</label>
            <input type="text" name="last_name" id="last-name" required>
        </div>

        <div class="form-item mb-4">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="form-item form-item-double mb-4">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div class="form-item form-item-double mb-4">
            <label for="password-confirm">Confirm Password</label>
            <input type="password" name="password_confirm" id="password-confirm" required>
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
