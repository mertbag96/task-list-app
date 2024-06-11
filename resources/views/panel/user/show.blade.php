@extends("panel.app")

@section("title", "Users | Panel")

@section("styles")

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

@endsection

@section("content")

    <div class="card">

        <div class="card-header">

            <h1 class="card-title">
                Users
            </h1>

            <a href="{{ route("panel.users.create") }}" class="btn-create">
                Create new user
            </a>

        </div>

        <table class="table table-bordered table-striped" id="users-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Team</th>
                <th>Gender</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Birth date</th>
                <th>Email</th>
                <th>Joined in</th>
                <th>
                    @if(auth()->user()["id"] === 1)
                        Actions
                    @else
                        Action
                    @endif
                </th>
            </tr>
            </thead>
        </table>

    </div>

@endsection

@section("scripts")

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function () {

            $('#users-table').DataTable({
                processing: false,
                serverSide: true,
                ajax: '{{ route("panel.users.get-users") }}',
                columns: [
                    {
                        data: 'id',
                        name: 'id',
                    },
                    {
                        data: 'team_id',
                        name: 'team_id',
                    },
                    {
                        data: 'gender',
                        name: 'gender',
                        render: function (data, type, row) {
                            let avatar, html;

                            switch (row["avatar"]) {
                                case 1:
                                    avatar = "{{ asset("assets/images/panel/avatars/male/1.png") }}";
                                    break;
                                case 2:
                                    avatar = "{{ asset("assets/images/panel/avatars/male/2.png") }}";
                                    break;
                                case 3:
                                    avatar = "{{ asset("assets/images/panel/avatars/male/3.png") }}";
                                    break;
                                case 4:
                                    avatar = "{{ asset("assets/images/panel/avatars/female/1.png") }}";
                                    break;
                                case 5:
                                    avatar = "{{ asset("assets/images/panel/avatars/female/2.png") }}";
                                    break;
                                case 6:
                                    avatar = "{{ asset("assets/images/panel/avatars/female/3.png") }}";
                                    break;
                                default:
                                    avatar = "{{ asset("assets/images/panel/avatars/default.png") }}";
                            }

                            html = `<div class="table-avatar">`;
                            html += `<img src="${avatar}" class="shadow-sm" alt="${data}">`;
                            html += `<span>${data}</span></div>`;

                            return html;
                        }
                    },
                    {
                        data: 'first_name',
                        name: 'first_name',
                    },
                    {
                        data: 'last_name',
                        name: 'last_name',
                    },
                    {
                        data: 'birth_date',
                        name: 'birth_date',
                        render: function (data) {
                            let day = data.split("-")[2];
                            let month = data.split("-")[1];
                            let year = data.split("-")[0];

                            return day + "." + month + "." + year;
                        }
                    },
                    {
                        data: 'email',
                        name: 'email',
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        render: function (data) {
                            let day = data.split(" ")[0].split("-")[2];
                            let month = data.split(" ")[0].split("-")[1];
                            let year = data.split(" ")[0].split("-")[0];

                            return day + "." + month + "." + year;
                        }
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        render: function (data, type, row) {
                            let content = `<a href="/panel/users/edit/${row['id']}" class="button button-orange">
                                            <i class="fa-solid fa-edit me-2"></i>Edit</a>`;

                            if (data === 1) {
                                content += `<button type="button" onclick="delete_user(${row['id']});"
                                                    class="button button-red">
                                                    <i class="fa-solid fa-trash-can me-2"></i>Delete</button>`;
                            }

                            return `<div class="table-actions">${content}</div>`;
                        }
                    },
                ],
                columnDefs: [
                    { type: 'date', targets: 5 }
                ]
            });

        });

        function delete_user(id) {
            alert(id);
        }

    </script>

@endsection
