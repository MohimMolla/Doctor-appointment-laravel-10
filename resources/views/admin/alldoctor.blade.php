@extends('layouts.admin-templeate')
@section('content')
<style>
    table,
    th,
    td {
        border: 2px rgb(43, 31, 31) solid;
        padding: 2px;
    }

    td img {
        height: 50px !important;
        max-width: 100%;
    }

    /* Ellipsis for long data */
    .ellipsis {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 50px;
        /* Adjust the value based on your layout */
    }
</style>
    {{-- message show end --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Doctor Table</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Doctor Id</th>
                            <th>Doctor Name</th>
                            {{-- <th >Email</th> --}}
                            <th>Phone</th>
                            <th>Speciality</th>
                            <th>Room number</th>
                            <th>Institute</th>
                            <th>Achievement</th>
                            <th>Image</th>

                            <th>Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doctor as $d)
                            <tr>
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->name }}</td>
                                {{-- <td>{{ $d->email }}</td> --}}
                                <td>{{ $d->phone }}</td>
                                <td>
                                    @foreach ($specialities as $speciality)
                                        @if ($speciality->id == $d->speciality_id)
                                            {{ $speciality->name }}
                                        @endif
                                    @endforeach
                                </td>

                                {{-- <td>{{ $d->speciality }}</td> --}}
                                <td>{{ $d->room_number }}</td>
                                <td class="ellipsis">{{ $d->institute }}</td>
                                <td class="ellipsis">{{ $d->achievement }}</td>
                                <td>
                                    <img src="{{ asset('doctorimage/' . $d->image) }}" height="100px" alt="">
                                </td>

                                <td>
                                    <a  href="{{ url('/editdoctor', $d->id) }}"><i class="fa-solid fa-pen-to-square" style="color: #275db9;"></i></a> | 
                                    <a onclick="return confirm('Are you sure this doctor data deleted')"
                                         href="{{ url('/deleted', $d->id) }}"><i class="fa-solid fa-trash" style="color: #c92626;"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $doctor->links() }}

        </div>
    </div>
@endsection
