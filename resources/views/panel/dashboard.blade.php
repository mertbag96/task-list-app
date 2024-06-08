@extends("panel.app")

@section("title", "Dashboard | Panel")

@section("content")

    <section class="dashboard">

        <h1 class="title">
            Dashboard coming soon...
        </h1>

    </section>

@endsection

@section("scripts")

    @if(session()->has("signed_in"))

        <script>
            $(".alert .fa-check").removeClass("d-none");
            $(".alert p").text("{{ session("signed_in") }}");
            $(".alert").removeClass("d-none");
            setTimeout( function () {
                $(".alert").addClass("animate__fadeOutRight");
            }, 5000);
        </script>

    @endif

@endsection
