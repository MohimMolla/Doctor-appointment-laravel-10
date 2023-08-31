@extends('layouts.admin-templeate')
@section('content')
    {{-- message show end --}}
    <div class="container">
        <div class="row">
            <div class="col-8 align-content-center">
                <form action="{{ route('addspeciality') }}" method="POST">
                    @csrf


                    <div>
                        <label for="">Speciality Name:</label>
                        <input type="text" class="form-control" name="name" placeholder="Write speciality name">
                    </div>
                    <button  class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
@endsection
