<header class="shadow-sm">

    <nav class="container">

        <a href="{{ route("home") }}" class="logo">
            <svg viewBox="0 0 88 88" xmlns="http://www.w3.org/2000/svg" >
                <g fill="none" fill-rule="evenodd">
                    <path d="M30.755 33.292l-7.34 8.935L40.798 56.48a5.782 5.782 0 008.182-.854l31.179-38.93-9.026-7.228L43.614 43.83l-12.86-10.538z" fill="#FFB000"></path>
                    <path d="M44 78.1C25.197 78.1 9.9 62.803 9.9 44S25.197 9.9 44 9.9V0C19.738 0 0 19.738 0 44s19.738 44 44 44 44-19.738 44-44h-9.9c0 18.803-15.297 34.1-34.1 34.1" fill="#4772FA"></path>
                </g>
            </svg>
            <span>Task List App</span>
        </a>

        <ul class="menu">
            <li>
                <a href="{{ route("home") }}" class="me-5 @if(request()->route()->getName() == "home") active @endif">
                    <i class="fa-solid fa-home"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route("dashboard") }}" class="me-5 @if(request()->route()->getName() == "dashboard") active @endif">
                    <i class="fa-solid fa-chart-pie"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route("tasks.show") }}" class="me-5 @if(request()->route()->getPrefix() == "/tasks") active @endif">
                    <i class="fa-solid fa-list-check"></i>
                    Tasks
                </a>
            </li>
            <li>
                <a href="{{ route("users.show") }}" class="me-5 @if(request()->route()->getPrefix() == "/users") active @endif">
                    <i class="fa-solid fa-users"></i>
                    Users
                </a>
            </li>
            <li>
                <a href="{{ route("teams.show") }}" class="@if(request()->route()->getPrefix() == "/teams") active @endif">
                    <i class="fa-solid fa-people-group"></i>
                    Teams
                </a>
            </li>
        </ul>

    </nav>

</header>
