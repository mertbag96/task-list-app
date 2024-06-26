<header class="shadow-sm">

    <nav class="container">

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
                <a href="{{ route("features") }}" class="me-5">
                    Features
                </a>
            </li>
            <li>
                <a href="{{ route("help-center") }}" class="me-5">
                    Help Center
                </a>
            </li>
            <li>
                <a href="{{ route("blog") }}" class="me-5">
                    Blog
                </a>
            </li>
            @unless(auth()->check())
                <li>
                    <a href="{{ route("auth.sign-in") }}" class="link">
                        Get Started
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ route("panel.dashboard") }}" class="link">
                        Visit Panel
                    </a>
                </li>
            @endunless

        </ul>

        <button class="hamburger-menu" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#mobile-menu" aria-controls="mobile-menu">
            <i class="fa-solid fa-bars"></i>
        </button>

    </nav>

</header>

<div class="offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="mobile-menu"
     aria-labelledby="mobile-menu-label">

    <div class="offcanvas-header">

        <h5 class="offcanvas-title">Menu</h5>

        <button type="button" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="fa-solid fa-times"></i>
        </button>

    </div>

    <hr>

    <div class="offcanvas-body">

        <ul>

            <li>
                <a href="{{ route("features") }}">Features</a>
            </li>

            <li>
                <a href="{{ route("help-center") }}">Help Center</a>
            </li>

            <li>
                <a href="{{ route("blog") }}">Blog</a>
            </li>

            @unless(auth()->check())
                <li>
                    <a href="{{ route("auth.sign-in") }}" class="link">
                        Get Started
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ route("panel.dashboard") }}" class="link">
                        Visit Panel
                    </a>
                </li>
            @endunless

        </ul>

    </div>

</div>
