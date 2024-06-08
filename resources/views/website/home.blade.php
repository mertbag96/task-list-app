@extends("website.app")

@section("title", "Welcome to Task List")

@section("content")

    <section class="home container">

        <div class="home-content">

            <h1 class="title">
                Stay <span>organized</span> and manage your <span>tasks</span>.
            </h1>

            <p class="description">
                Create tasks, assign tasks to users, organize users with teams.
            </p>

            @unless(auth()->check())
                <a href="{{ route("auth.sign-in") }}" class="link">Get started</a>
            @else
                <a href="{{ route("panel.dashboard") }}" class="link">Visit Panel</a>
            @endunless

        </div>

        <div class="home-content">

            <img src="{{ asset("assets/images/home.png") }}" alt="Home">

        </div>

    </section>

@endsection
