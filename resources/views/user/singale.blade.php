@extends('layouts.templete')

@section('css')
@endsection
@section('content')
    {{-- doctore details section --}}
    <div class="container">
        @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss='alert'>x</button>
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="row ">
            <div class="col-4 ">

                <img src="{{ asset('doctorimage/' . $doctor->image) }}" alt="doctor image" height="250px" width="250px">

                {{-- show comment section  start --}}
                <hr>
                @foreach ($comments as $comment)
                    <div class="comment border border-success p-2 ">


                        <p class="pt-2">Rating: <span class="star-rating">
                                @php
                                    $integerPart = floor($comment->rating);
                                @endphp

                                @for ($i = 1; $i <= $integerPart; $i++)
                                    <span class="full-star" style="color: orange;">&#9733;</span>
                                @endfor

                                @for ($i = ceil($comment->rating); $i < 5; $i++)
                                    <span class="full-star" style="color: black;">&#9733;</span>
                                @endfor
                            </span></p>



                        {{-- <h3>Comments by : </h3> --}}
                        <p><i class="fa-solid fa-comment-dots fa-xl" style="color: #d91edc;"> </i> <span
                                class="text-success pt-2">{{ $comment->user->name }} :</span><br> <span
                                style="font-size: 16px">{{ $comment->comment }}</span></p>

                        {{-- show reply start --}}

                        @foreach ($commentReplies[$comment->id] as $reply)
                            <p><i class="fa-solid fa-reply-all fa-xl" style="color: #d91edc;"> </i> <span
                                    class="text-success pt-2">{{ $reply->user->name }} : </span><br> <span
                                    style="font-size: 16px">{{ $reply->reply }}</span></p>
                        @endforeach

                        {{-- show reply start --}}
                        <button class="reply-btn btn-primary">Reply</button>

                        <div class="reply-form">
                            <form class="mt-2" action="{{ route('reply', ['commentId' => $comment->id]) }}"
                                method="POST">
                                @csrf
                                <textarea name="reply" id="reply " class="form-control" rows="3" required></textarea>
                                <button class="btn btn-primary mt-2">Reply</button>
                            </form>
                        </div>

                    </div>
                    <hr>
                @endforeach
                {{-- start reply section  --}}

                {{-- show comment section  end --}}
                {{-- Start Comment and review --}}
                <button class="comment-btn btn-primary">Comment</button>
                <div class="comment-form">
                    {{-- <h2>Comments and Reviews</h2> --}}


                    <form class="mt-2" method="POST" action="{{ route('comment', ['doctor' => $doctor->id]) }}">
                        @csrf
                        <div class="form-group">
                            <label for="comment">Your Comment:</label>
                            <textarea name="comment" id="comment" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating :</label>
                            <input type="number" name="rating" id="rating" class="form-control" min="1"
                                max="5" required>
                        </div>
                        <button class="btn btn-primary mt-2">Comment</button>
                    </form>

                </div>
                {{-- end Comment and Review --}}

            </div>
            <div class="col-7 mt-3">
                <h2 class="my-3" style="color: rgb(9, 170, 167)">Doctor Name : {{ $doctor->name }}</h2>
                <h4 class="my-3" style="color: rgb(67, 70, 70)">Speciality : {{ $doctor->speciality }}</h4>

                <h4 class="my-3" style="color: rgb(120, 120, 120)">Achievement : {{ $doctor->achievement }}</h4>
                <p style="color: rgb(93, 154, 155)">Institute : {{ $doctor->institute }}</p>

                <p class="mb-2 "><strong>Doctor Details</strong> :</p>
                <p>{{ $doctor->doctor_details }}</p>

            </div>
        </div>
    </div>
    {{-- doctore details section --}}

    {{-- appoinment section --}}


    <div class="page-section">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Make an Appointment With <span class="text-primary">{{$doctor->name}}</span></h1>


            <form class="main-form" action="{{ url('appointment') }}" method="POST">
                @csrf
                <div class="row mt-5 ">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" name="name" class="form-control" placeholder="Full name" required>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="text" name="email" class="form-control" placeholder="Email address.." required>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                    </div>
                   
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <select name="speciality" id="speciality_id" class="custom-select" required>  
                             <option value="{{ $doctor->speciality_id }}">
                                {{ $doctor->speciality }}
                            </option>
                         </select>

                    </div>

                       <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <input name="date" type="date" class="form-control" min="{{ date('Y-m-d') }}" required>
                    </div>
     <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <select name="doctor_name" id="doctor_id" class="custom-select" required>
                             <option value="{{ $doctor->id }}">{{ $doctor->name }}
                            </option>

                            </select>
                    </div>

                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." required></textarea>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>

            </form>
        </div>
    </div>
    {{-- appoinment section --}}
@endsection
{{-- this script for toggle reply button  --}}


@section('script')
    <script>
        $(document).ready(function() {
            $('.reply-form, .comment-form').hide();

            $(".reply-btn").click(function() {

                //console.log(' reply button is clicked');
                $(this).siblings('.reply-form').toggle();

            });

            $(".comment-btn").click(function() {
                //console.log('comment button is clicked');
                $(this).siblings('.comment-form').toggle();

            });
        });
    </script>
@endsection
