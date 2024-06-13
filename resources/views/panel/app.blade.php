<!doctype html>
<html lang="{{ config("app.locale") }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link rel="shortcut icon" href="{{ asset("assets/icons/favicon.png") }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset("assets/icons/apple-touch-icon-60x60.png") }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("assets/icons/apple-touch-icon-76x76.png") }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset("assets/icons/apple-touch-icon-120x120.png") }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset("assets/icons/apple-touch-icon-152x152.png") }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("assets/icons/apple-touch-icon-180x180.png") }}">
    @yield("styles")
    <link rel="stylesheet" href="{{ asset("assets/plugins/bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/plugins/animate.css/animate.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/panel.css") }}">
</head>
<body class="container-fluid">

<!-- Alerts -->
<div class="alert animate__animated animate__fadeInRight d-none" role="alert">
    <i class="fa-solid fa-check d-none"></i>
    <i class="fa-solid fa-exclamation d-none"></i>
    <p></p>
    <button type="button" class="close-alert">
        <i class="fa-solid fa-times"></i>
    </button>
</div>

<!-- Modals -->
<div class="modal" id="modal-delete" data-bs-backdrop="static"
     data-bs-keyboard="false" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-sm animate__animated animate__pulse">

        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <p class="m-0"></p>
            </div>

            <div class="modal-footer">

                <form action="" method="POST" autocomplete="off">

                    @csrf

                    @method("DELETE")

                    <button type="button" class="button-red" data-bs-dismiss="modal">No</button>
                    <button type="submit" class="button-green">Yes</button>

                </form>

            </div>

        </div>

    </div>

</div>

@include("panel.layout.header")

<main>

    @include("panel.layout.side-menu")

    <section class="panel-container panel-area">

        <section class="panel-content panel-area">

            @yield("content")

        </section>

        @include("panel.layout.footer")

    </section>

</main>

<script src="{{ asset("assets/plugins/jQuery/jquery-3.7.1.min.js") }}"></script>
<script src="{{ asset("assets/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("assets/js/panel.js") }}"></script>

@yield("scripts")

</body>
</html>

