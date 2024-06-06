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

<section class="errors">

    <div class="error-logo">

        <a href="{{ route("home") }}" class="logo">
            <svg viewBox="0 0 88 88" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                    <path d="M30.755 33.292l-7.34 8.935L40.798 56.48a5.782 5.782 0 008.182-.854l31.179-38.93-9.026-7.228L43.614 43.83l-12.86-10.538z" fill="#FFB000"></path>
                    <path d="M44 78.1C25.197 78.1 9.9 62.803 9.9 44S25.197 9.9 44 9.9V0C19.738 0 0 19.738 0 44s19.738 44 44 44 44-19.738 44-44h-9.9c0 18.803-15.297 34.1-34.1 34.1" fill="#FFFFFF"></path>
                </g>
            </svg>
            <span>Task List</span>
        </a>

    </div>

    <div class="error-content">

        @yield("content")

    </div>

</section>

</body>
</html>
