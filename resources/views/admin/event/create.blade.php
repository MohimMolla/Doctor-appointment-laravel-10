@extends('layouts.admin-templeate')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 align-content-center">
                <form action="{{ route('event.store') }}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @include('admin.event.event-form')
                   
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
