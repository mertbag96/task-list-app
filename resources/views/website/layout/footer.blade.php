<footer>

    <div class="footer-container container">

        <a href="{{ route("home") }}" class="logo">
            <svg viewBox="0 0 88 88" xmlns="http://www.w3.org/2000/svg" >
                <g fill="none" fill-rule="evenodd">
                    <path d="M30.755 33.292l-7.34 8.935L40.798 56.48a5.782 5.782 0 008.182-.854l31.179-38.93-9.026-7.228L43.614 43.83l-12.86-10.538z" fill="#FFB000"></path>
                    <path d="M44 78.1C25.197 78.1 9.9 62.803 9.9 44S25.197 9.9 44 9.9V0C19.738 0 0 19.738 0 44s19.738 44 44 44 44-19.738 44-44h-9.9c0 18.803-15.297 34.1-34.1 34.1" fill="#4772FA"></path>
                </g>
            </svg>
            <span>Task List</span>
        </a>

        <ul class="menu">
            <li>
                <span>General</span>
                <a href="{{ route("features") }}">
                    Features
                </a>
                <a href="{{ route("help-center") }}">
                    Help Center
                </a>
                @unless(auth()->check())
                    <a href="{{ route("auth.sign-in") }}">
                        Get Started
                    </a>
                @else
                    <a href="{{ route("panel.dashboard") }}">
                        Visit Panel
                    </a>
                @endunless
            </li>
            <li>
                <span>Corporate</span>
                <a href="{{ route("blog") }}">
                    Blog
                </a>
                <a href="{{ route("about") }}">
                    About
                </a>
                <a href="{{ route("contact") }}">
                    Contact
                </a>
            </li>
            <li>
                <span>Legal</span>
                <a href="{{ route("terms") }}" target="_blank">
                    Terms
                </a>
                <a href="{{ route("privacy") }}" target="_blank">
                    Privacy
                </a>
                <a href="{{ route("security") }}" target="_blank">
                    Security
                </a>
            </li>
        </ul>

    </div>

    <hr class="container">

    <p class="container">
        &copy; {{ date("Y") }} Task List
    </p>

</footer>
