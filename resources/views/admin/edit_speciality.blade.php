@extends('layouts.admin-templeate')
@section('content')
    {{-- message show end --}}
    <div class="container">
        <div class="row">
            <div class="col-8 align-content-center">
                <form action="{{ route('updatespeciality', $speciality->id) }}" method="POST">
                    @csrf
                    <fieldset>
                        <legend>Add Specaility</legend>
                        <div style="padding: 15px;">
                            <label class="form-label">Speciality Name:</label>
                            <input type="text" class="form-control" name="name" value="{{ $speciality->name }}">
                        </div>



                        <div style="padding: 15px;">
                            {{--<input value="Submit" class="btn btn-success">--}}
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
@endsection
