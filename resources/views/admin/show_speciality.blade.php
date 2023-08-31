@extends('layouts.admin-templeate')
@section('content')
    {{-- message show end --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Speciality Table</h6>
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-4" href="{{route('addSpeciality')}}">Add Speciality</a>
          
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Speciality Name</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $speciality)
                            <tr>
                                <td>{{ $speciality->id }}</td>
                                <td>{{ $speciality->name }}</td>

                                <td>
                                    <a href="{{ route('editspeciality', $speciality->id) }}"><i class="fa-solid fa-pen-to-square" style="color: #275db9;"></i></a> | 
                                    <a onclick="return confirm('Are you sure this user will delete?')"
                                        href="{{ route('speciality_delete', $speciality->id) }}"><i class="fa-solid fa-trash" style="color: #c92626;"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  
                </table>
                {{$data->links()}}
            </div>


        </div>
    </div>
@endsection
