<div class="aside">

    <ul class="side-menu">

        <li class="side-menu-top">
            @switch(auth()->user()["avatar"])
                @case(1)
                    <img src="{{ asset("assets/images/panel/avatars/male/1.png") }}" alt="Avatar"
                         class="side-pp shadow-sm">
                    @break
                @case(2)
                    <img src="{{ asset("assets/images/panel/avatars/male/2.png") }}" alt="Avatar"
                         class="side-pp shadow-sm">
                    @break
                @case(3)
                    <img src="{{ asset("assets/images/panel/avatars/male/3.png") }}" alt="Avatar"
                         class="side-pp shadow-sm">
                    @break
                @case(4)
                    <img src="{{ asset("assets/images/panel/avatars/female/1.png") }}" alt="Avatar"
                         class="side-pp shadow-sm">
                    @break
                @case(5)
                    <img src="{{ asset("assets/images/panel/avatars/female/2.png") }}" alt="Avatar"
                         class="side-pp shadow-sm">
                    @break
                @case(6)
                    <img src="{{ asset("assets/images/panel/avatars/female/3.png") }}" alt="Avatar"
                         class="side-pp shadow-sm">
                    @break
                @default
                    <img src="{{ asset("assets/images/panel/avatars/default.png") }}" alt="Avatar"
                         class="side-pp shadow-sm">
            @endswitch
            <p>
                {{ auth()->user()["first_name"] . " " . auth()->user()["last_name"] }}
            </p>
        </li>

        <li class="side-menu-item">

            <a href="{{ route("panel.dashboard") }}"
               @if(request()->route()->getName() == "panel.dashboard") class="active" @endif>
                <i class="fa-regular fa-chart-bar"></i>
                <span>Dashboard</span>
            </a>

        </li>

        <li class="side-menu-item">

            <a href="{{ route("panel.users.show") }}"
               @if(request()->route()->getName() == "panel.users.show") class="active" @endif>
                <i class="fa-regular fa-user"></i>
                <span>Users</span>
            </a>

        </li>

        <li class="side-menu-item">

            <a href="{{ route("panel.teams.show") }}"
               @if(request()->route()->getName() == "panel.teams.show") class="active" @endif>
                <i class="fa-regular fa-flag"></i>
                <span>Teams</span>
            </a>

        </li>

        <li class="side-menu-item">

            <a href="{{ route("panel.tasks.show") }}"
               @if(request()->route()->getName() == "panel.tasks.show") class="active" @endif>
                <i class="fa-solid fa-list-check"></i>
                <span>Tasks</span>
            </a>

        </li>

    </ul>

    <p class="side-bottom">
        Visit
        <a href="{{ route("home") }}">
            Task List
        </a>
    </p>

</div>
