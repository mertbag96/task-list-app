@extends("auth.layout")

@section("title", "Did you forget your password? Reset it now!")

@section("form")

    <form action="{{ route("auth.reset-password") }}" method="POST" autocomplete="off">

        @csrf

        <div class="form-item mb-4">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="form-item mb-4">
            <button type="submit">Reset password</button>
        </div>

        <div class="form-item">
            <p>
                Do you remember your password?
                <a href="{{ route("auth.sign-in") }}">
                    Sign in
                </a>
            </p>
        </div>

    </form>

@endsection

