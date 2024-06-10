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
            <p class="team">
                {{ auth()->user()->team["name"] ?? '' }}
            </p>
        </li>

        <li class="side-menu-item">

            <a href="{{ route("panel.dashboard") }}"
               @if(request()->route()->getName() == "panel.dashboard") class="active" @endif>
                <i class="fa-regular fa-chart-bar"></i>
                <span>Dashboard</span>
            </a>

        </li>

        <li class="accordion" id="side-menu-accordion">

            <div class="accordion-item" data-item="users">

                <h2 class="accordion-header">

                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#side-users" aria-expanded="true" aria-controls="side-users">
                        <span class="d-flex justify-content-between align-items-center w-100">
                            <span>
                                <i class="fa-regular fa-user"></i>
                                <span class="span">Users</span>
                            </span>
                            <i class="fa-solid fa-angle-down"></i>
                        </span>
                    </button>

                </h2>

                <div id="side-users" class="accordion-collapse collapse" data-bs-parent="#side-menu-accordion">

                    <div class="accordion-body">

                        <ul class="side-sub-menu">

                            <li class="side-sub-menu-item">
                                <a href="{{ route("panel.users.create") }}">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>Create</span>
                                </a>
                            </li>

                            <li class="side-sub-menu-item">
                                <a href="{{ route("panel.users.show") }}">
                                    <i class="fa-solid fa-bars"></i>
                                    <span>List</span>
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="accordion-item" data-item="teams">

                <h2 class="accordion-header">

                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#side-teams" aria-expanded="true" aria-controls="side-teams">
                        <span class="d-flex justify-content-between align-items-center w-100">
                            <span>
                                <i class="fa-regular fa-flag"></i>
                                <span class="span">Teams</span>
                            </span>
                            <i class="fa-solid fa-angle-down"></i>
                        </span>
                    </button>

                </h2>

                <div id="side-teams" class="accordion-collapse collapse" data-bs-parent="#side-menu-accordion">

                    <div class="accordion-body">

                        <ul class="side-sub-menu">

                            <li class="side-sub-menu-item">
                                <a href="{{ route("panel.teams.create") }}">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>Create</span>
                                </a>
                            </li>

                            <li class="side-sub-menu-item">
                                <a href="{{ route("panel.teams.show") }}">
                                    <i class="fa-solid fa-bars"></i>
                                    <span>List</span>
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="accordion-item" data-item="tasks">

                <h2 class="accordion-header">

                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#side-tasks" aria-expanded="true" aria-controls="side-tasks">
                        <span class="d-flex justify-content-between align-items-center w-100">
                            <span>
                                <i class="fa-solid fa-list-check"></i>
                                <span class="span">Tasks</span>
                            </span>
                            <i class="fa-solid fa-angle-down"></i>
                        </span>
                    </button>

                </h2>

                <div id="side-tasks" class="accordion-collapse collapse" data-bs-parent="#side-menu-accordion">

                    <div class="accordion-body">

                        <ul class="side-sub-menu">

                            <li class="side-sub-menu-item">
                                <a href="{{ route("panel.tasks.create") }}">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>Create</span>
                                </a>
                            </li>

                            <li class="side-sub-menu-item">
                                <a href="{{ route("panel.tasks.show") }}">
                                    <i class="fa-solid fa-bars"></i>
                                    <span>List</span>
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </li>

    </ul>

</div>
