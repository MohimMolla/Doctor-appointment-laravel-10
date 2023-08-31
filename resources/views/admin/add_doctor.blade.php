@extends('layouts.admin-templeate')
@section('content')
    {{-- message show end --}}
    <div class="container">
        <div class="row">
            <div class="col-8 align-content-center">
                <form action="{{ url('store_doctor') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                       
                        <div class="mb-3">
                            <label for="" class="form-label">Doctor Name:</label>
                            <input type="text" class="form-control" name="name" placeholder="Write name">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Phone Number:</label>
                            <input type="text" class="form-control" name="phone" placeholder="Write Phone Number">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Speciality:</label>


                            {{-- <input type="hidden" value="{{ $speciality->speciality_id  }}"> --}}
                            <select name="speciality_id" id="speciality" style="color: black; width: 200px;">
                                <option value="-1">Select</option>
                                @foreach ($speciality as $sp)
                                    <option value="{{ $sp->id }}">{{ $sp->name }}</option>
                                @endforeach
                            </select>



                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Room Number:</label>
                            <input type="text" class="form-control" name="room_number" placeholder="Write room number">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Achievement : </label>
                            <input type="text" class="form-control" name="achievement" placeholder="Write Achievement">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Institute : </label>
                            <input type="text" class="form-control" name="institute" placeholder="Write Institute">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Doctor Details : </label>
                            <input type="text" class="form-control" name="doctor_details"
                                placeholder="Write Doctor Details">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Doctor Image:</label>
                            <input type="file" name="file">
                        </div>
                        <div class="mb-3">
                            {{--<input  value="Submit" class="btn btn-success">--}}
                            <button class="btn btn-success">Submit</button>
                        </div>
                    
                </form>
            </div>
        </div>
    </div>
    
    <!-- container-scroller -->
    <!-- plugins:js -->
@endsection
