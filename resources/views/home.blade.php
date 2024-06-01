@extends("app")

@section("title", "Welcome to Task List App")

@section("content")

    <section class="home">

        <div class="home-content">
            <h1 class="title">
                Stay <span>organized</span> and manage your <span>tasks</span>.
            </h1>
            <p class="description">
                Create tasks, assign tasks to users, organize users with teams.
            </p>
            <a href="#" class="link">Get started</a>
        </div>

        <div class="home-content">
            <img src="{{ asset("assets/images/home.png") }}" alt="Home">
        </div>

    </section>

@endsection



