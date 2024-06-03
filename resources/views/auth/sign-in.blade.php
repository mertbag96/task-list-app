@extends("auth.layout")

@section("title", "Sign in to Task List")

@section("form")

    <form action="{{ route("auth.log-in") }}" method="POST" autocomplete="off">

        @csrf

        <div class="form-item mb-4">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="form-item mb-4">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
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
