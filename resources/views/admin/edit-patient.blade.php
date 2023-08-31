@extends('layouts.admin-templeate')
@section('content')
    {{-- message show end --}}
    <div class="container">
        <div class="row">
            <div class="col-8 align-content-center">
                <form action="{{ route('update_patient', $patient->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px;">
                        <label class="form-label">Patient Name: {{ $patient->appointment->name }}</label>
                    </div>
                    <div style="padding: 15px;">
                        <label class="form-label">Doctor Name: {{ $patient->appointment->doctor->name }}</label>
                    </div>
                    <div style="padding: 15px;">
                        <label class="form-label">Speciality Name: {{ $patient->appointment->speciality->name }}</label>
                    </div>

                    <div style="padding: 15px;">
                        <label class="form-label">Image: </label>
                        <input type="file" class="form-control" name="file">
                    </div>

                    <div style="padding: 15px;">
                        <label class="form-label">Advice: </label>
                        <input type="text" class="form-control" name="advice" value="{{ $patient->advice }}">
                    </div>
                    <div style="padding: 15px;">
                        <label class="form-label">Comments: </label>
                        <input type="text" class="form-control" name="comments" value="{{ $patient->comments }}">
                    </div>

                    <div style="padding: 15px;">
                        {{--<input  value="Submit" class="btn btn-success">--}}
                        <button class="btn btn-success">Submit</button>
                    </div>
                </form>

            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
    @endsection
