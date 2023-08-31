@extends('layouts.admin-templeate')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User List Table</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Email Address</th>
                            <th>User Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)
                            <tr >
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <a  href="{{ route('user_edit', $user->id) }}"><i class="fa-sharp fa-solid fa-pen-to-square" style="color: #e41177;"></i> </a> |
                                    <a 
                                        onclick="return confirm('Are you sure this user will delete?')"
                                        href="{{ route('user_delete', $user->id) }}"><i class="fa-solid fa-trash" style="color: #f80d0d;"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                {{ $users->links() }}
            </div>

        </div>
    </div>
@endsection
