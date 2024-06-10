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
                    { data: 'id', name: 'id' },
                    { data: 'team_id', name: 'team_id' },
                    { data: 'gender', name: 'gender' },
                    { data: 'first_name', name: 'first_name' },
                    { data: 'last_name', name: 'last_name' },
                    { data: 'birth_date', name: 'birth_date' },
                    { data: 'email', name: 'email' },
                    { data: 'created_at', name: 'created_at' },
                ]
            });

        });

    </script>

@endsection
