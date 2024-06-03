<div class="aside">

    <ul class="side-menu">

        <li class="side-menu-top">
            <img src="{{ asset("assets/images/avatars/male/1.png") }}" alt="Mert Bağ" class="side-pp shadow-sm">
            <p>Mert Bağ</p>
        </li>

        <li class="side-menu-item">

            <a href="{{ route("panel.dashboard") }}"
               @if(request()->route()->getName() == "panel.dashboard") class="active" @endif>
                <i class="fa-solid fa-chart-pie"></i>
                <span>Dashboard</span>
            </a>

        </li>

        <li class="side-menu-item">

            <a href="{{ route("panel.users.show") }}"
               @if(request()->route()->getName() == "panel.users.show") class="active" @endif>
                <i class="fa-solid fa-users"></i>
                <span>Users</span>
            </a>

        </li>

        <li class="side-menu-item">

            <a href="{{ route("panel.teams.show") }}"
               @if(request()->route()->getName() == "panel.teams.show") class="active" @endif>
                <i class="fa-solid fa-people-group"></i>
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
