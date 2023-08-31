@extends('layouts.admin-templeate')
@section('content')
    {{-- message show end --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Reply Table</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>


                            <th>Comment Id</th>
                            <th>User Name</th>

                            <th>Doctor Name</th>
                            <th>Reply</th>
                            <th>Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($replies as $reply)
                            <tr>
                                <td>{{ $reply->id }}</td>
                                <td>{{ $reply->user->name }}</td>
                                <td>{{ $reply->doctor->name }}</td>
                                <td>{{ $reply->reply }}</td>

                                <td>
                                    <a  href="{{ route('editreply', $reply->id) }}"><i class="fa-sharp fa-solid fa-pen-to-square" style="color: #e41177;"></i></a> | 
                                    <a onclick="return confirm('Are you sure this doctor data deleted')"
                                        href="{{ route('deletereply', $reply->id) }}"><i class="fa-solid fa-trash" style="color: #e01a1a;"></i></a>
                                </td>



                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $replies->links() }}

        </div>
    </div>
@endsection
