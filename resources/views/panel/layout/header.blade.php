<header>

    <nav>

        <div class="brand">

            <a href="{{ route("panel.dashboard") }}" class="logo">
                <svg viewBox="0 0 88 88" xmlns="http://www.w3.org/2000/svg" >
                    <g fill="none" fill-rule="evenodd">
                        <path d="M30.755 33.292l-7.34 8.935L40.798 56.48a5.782 5.782 0 008.182-.854l31.179-38.93-9.026-7.228L43.614 43.83l-12.86-10.538z" fill="#FFB000"></path>
                        <path d="M44 78.1C25.197 78.1 9.9 62.803 9.9 44S25.197 9.9 44 9.9V0C19.738 0 0 19.738 0 44s19.738 44 44 44 44-19.738 44-44h-9.9c0 18.803-15.297 34.1-34.1 34.1" fill="#4772FA"></path>
                    </g>
                </svg>
                <div class="d-flex flex-column align-items-center">
                    <span>Task List</span>
                    <small>Panel</small>
                </div>
            </a>

        </div>

        <ul class="menu">

            <li>

                <button type="button" class="profile dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    @switch(auth()->user()["avatar"])
                        @case(1)
                            <img src="{{ asset("assets/images/panel/avatars/male/1.png") }}" alt="Avatar"
                                 class="shadow-sm">
                            @break
                        @case(2)
                            <img src="{{ asset("assets/images/panel/avatars/male/2.png") }}" alt="Avatar"
                                 class="shadow-sm">
                            @break
                        @case(3)
                            <img src="{{ asset("assets/images/panel/avatars/male/3.png") }}" alt="Avatar"
                                 class="shadow-sm">
                            @break
                        @case(4)
                            <img src="{{ asset("assets/images/panel/avatars/female/1.png") }}" alt="Avatar"
                                 class="shadow-sm">
                            @break
                        @case(5)
                            <img src="{{ asset("assets/images/panel/avatars/female/2.png") }}" alt="Avatar"
                                 class="shadow-sm">
                            @break
                        @case(6)
                            <img src="{{ asset("assets/images/panel/avatars/female/3.png") }}" alt="Avatar"
                                 class="shadow-sm">
                            @break
                        @default
                            <img src="{{ asset("assets/images/panel/avatars/default.png") }}" alt="Avatar"
                                 class="shadow-sm">
                    @endswitch

                    <span class="user-details">

                        <span class="full-name">
                            {{ auth()->user()["first_name"] . ' ' . auth()->user()["last_name"]  }}
                        </span>

                        <span class="team">
                            {{ auth()->user()->team["name"] ?? 'Temporary Team' }}
                        </span>

                    </span>

                </button>

                <ul class="profile-menu dropdown-menu dropdown-menu-end">

                    <li>

                        <a class="dropdown-item" href="{{ route("panel.account.profile") }}">
                            <i class="fa-regular fa-user"></i>
                            <span>Profile</span>
                        </a>

                    </li>

                    <li>

                        <a class="dropdown-item" href="{{ route("panel.account.messages") }}">
                            <i class="fa-regular fa-message"></i>
                            <span>Messages</span>
                        </a>

                    </li>

                    <li>

                        <a class="dropdown-item" href="{{ route("panel.account.notifications") }}">
                            <i class="fa-regular fa-bell"></i>
                            <span>Notifications</span>
                        </a>

                    </li>

                    <li>
                        <hr class="m-0 p-0">
                    </li>

                    <li>

                        <form action="{{ route("auth.log-out") }}" method="POST">

                            @csrf

                            <button type="submit" class="dropdown-item">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                <span>Sign out</span>
                            </button>

                        </form>

                    </li>

                </ul>

            </li>

        </ul>

    </nav>

</header>
