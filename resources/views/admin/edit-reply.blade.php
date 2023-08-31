@extends('layouts.admin-templeate')
@section('content')
    {{-- message show end --}}
    <div class="container">
        <div class="row">
            <div class="col-8 align-content-center">
                <form action="{{ route('updatereply', $replies->id) }}" method="POST">
                    @csrf
                    <div style="padding: 15px;">
                        <label class="form-label">User Name: {{ $replies->user->name }}</label>
                    </div>
                    <div style="padding: 15px;">
                        <label class="form-label">Doctor Name: {{ $replies->doctor->name }}</label>
                    </div>



                    <div style="padding: 15px;">
                        <label class="form-label">Comment: </label>
                        <input type="text" class="form-control" name="reply" value="{{ $replies->reply }}">
                    </div>


                    <div style="padding: 15px;">
                        {{--<input value="Submit" class="btn btn-success">--}}
                        <button class="btn btn-success">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
@endsection
