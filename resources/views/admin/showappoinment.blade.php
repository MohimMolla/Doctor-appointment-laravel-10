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
 
    
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Appiontment Table</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Doctor Name</th>
                            <th>Speciality</th>
                            <th>Date</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Approved</th>
                            <th>Cancel Appoinment</th>
                            <th>Send Mail</th>
                            <th>Compleate Appoinment</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{ $d->id }}</td>
                                <td class="ellipsis">{{ $d->name }}</td>
                                <td class="ellipsis">{{ $d->email }}</td>
                                <td class="ellipsis">{{ $d->phone }}</td>
                                <td>{{ $d->doctor->name }}</td>
                                <td class="ellipsis">{{ $d->speciality->name }}</td>
                                <td>{{ $d->date }}</td>
                                <td class="ellipsis">{{ $d->message }}</td>
                                <td>{{ $d->status }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ url('approved', $d->id) }}">Approved</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="{{ url('canceled', $d->id) }}">Canceled</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="{{ url('emailview', $d->id) }}">Mail</a>
                                </td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('insert_patient', $d->id) }}">Sucess</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
    {{ $data->links() }}
@endsection
