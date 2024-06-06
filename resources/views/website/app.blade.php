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
    <link rel="stylesheet" href="{{ asset("assets/plugins/bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
</head>
<body class="container-fluid">

@include("website.layout.header")

<main>

    @yield("content")

</main>

@include("website.layout.footer")

<script src="{{ asset("assets/plugins/jQuery/jquery-3.7.1.min.js") }}"></script>
<script src="{{ asset("assets/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("assets/js/script.js") }}"></script>

@yield("scripts")

</body>
</html>
