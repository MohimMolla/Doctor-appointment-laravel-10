@extends('layouts.admin-templeate')
@section('content')
    {{-- message show end --}}
    <div class="container">
        <div class="row">
            <div class="col-8 align-content-center">
                <form action="{{ url('updatedoctor', $doctor->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <legend>Add Doctor</legend>
                        <div style="padding: 15px;">
                            <label class="form-label">Doctor Name:</label>
                            <input type="text" class="form-control" name="name" value="{{ $doctor->name }}">
                        </div>
                        <div style="padding: 15px;">
                            <label class="form-label">Phone Number:</label>
                            <input type="text" class="form-control" name="phone" value="{{ $doctor->phone }}">
                        </div>
                        <div style="padding: 15px;">
                            <label class="form-label">Speciality:</label>
                            <select name="speciality_id" id="speciality_id" style="color: black; width:200px;">

                                @foreach ($speciality as $sp)
                                    <option value="{{ $sp->id }}"
                                        {{ $doctor->speciality_id == $sp->id ? 'selected' : '' }}>
                                        {{ $sp->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div style="padding: 15px;">
                            <label class="form-label">Room Number:</label>
                            <input type="text" class="form-control" name="room_number"
                                value="{{ $doctor->room_number }}">
                        </div>
                        <div style="padding: 15px;">
                            <label class="form-label">Achievement : </label>
                            <input type="text" class="form-control" name="achievement"
                                value="{{ $doctor->achievement }}">
                        </div>
                        <div style="padding: 15px;">
                            <label class="form-label">Institute : </label>
                            <input type="text" class="form-control" name="institute" value="{{ $doctor->institute }}">
                        </div>
                        <div style="padding: 15px;">
                            <label class="form-label">Doctor Details : </label>
                            <input type="text" class="form-control" name="doctor_details"
                                value="{{ $doctor->doctor_details }}">
                        </div>

                        <div style="padding: 15px;">
                            <label class="form-label">Old Doctor Image:</label>
                            <img src="{{ asset('doctorimage/' . $doctor->image) }}" height="100px" width="100px"
                                alt="img not found">
                        </div>
                        <div style="padding: 15px;">
                            <label class="form-label">New Doctor Image:</label>
                            <input type="file" name="file">
                        </div>
                        <div style="padding: 15px;">
                          
                            {{--<input value="Submit" class="btn btn-primary">--}}
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
