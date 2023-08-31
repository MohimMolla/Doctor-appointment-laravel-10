@extends('layouts.templete')

@section('css')
   
@endsection
@section('content')
<div class="container">
<div class="row ">
	<div class="col-12 my-3 ">

					


					{{--<h2 class="my-3" style="color: rgb(9, 170, 167)">Reporter Name : {{ $event->name }}</h2>--}}
					<h4 class="my-3" style="color: rgb(21, 182, 241)">{{ $event->title }}</h4>
					<div style="text-align: center;">
					 <img src="{{ asset('events/' . $event->image)}}">
					</div>
					<p class="mt-4">{{ $event->description }}</p>

	</div>
</div>
</div>
@endsection