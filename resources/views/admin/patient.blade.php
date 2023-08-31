@extends('layouts.admin-templeate')
@section('content')
    {{-- message show end --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Patient Table</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>ID</th>
                            <th>User Name</th>
                            <th>Doctor Name</th>
                            <th>Doctor Speciality</th>
                            <th>Prescription Image</th>
                            <th>Advise</th>
                            <th>Comments</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patient as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->appointment->name }}</td>
                                <td>{{ $p->appointment->doctor->name }}</td>
                                <td>{{ $p->appointment->speciality->name }}</td>
                                {{-- <td>{{ $p->image }}</td> --}}
                                <td>
                                    <img src="{{ asset('prescription/' . $p->image) }}" height="100px" alt="">
                                </td>
                                <td>{{ $p->advice }}</td>
                                <td>{{ $p->comments }}</td>

                                <td>
                                    <a  href="{{ route('edit_patient', $p->id) }}"><i class="fa-sharp fa-solid fa-pen-to-square" style="color: #e41177;"></i></a> |
                                    <a onclick="return confirm('Are you sure this doctor data deleted')"
                                         href="{{ route('delet_patient', $p->id) }}"><i class="fa-solid fa-trash" style="color: #e01a1a;"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                {{ $patient->links() }}
            </div>

        </div>
    </div>
@endsection
