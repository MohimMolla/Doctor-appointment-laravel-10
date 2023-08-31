@extends('layouts.templete')

@section('content')
    <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($events as $event)
                            <div class="col-sm-4 py-3 ">
                                <div class="card-blog" style="height:300px">
                                    <div class="header">
                                        <a href="" class="post-thumb">
                                            <img src="{{ asset('events/' . $event->image) }}" alt="">
                                        </a>
                                    </div>
                                    <a href="{{ route('singleEvent', ['id' => $event->id]) }}">
                                        <div class="body">
                                            <h5 class="post-title">{{ $event->title }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            
                        @endforeach
                        
                    </div>
                  
                    <!-- .row -->
                </div>
               

                {{--{{$event->links()}}--}}
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Search</h3>
                            <form action="#" class="search-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                                    <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Categories</h3>
                            <ul class="categories">
                                <li><a href="#">Food <span>12</span></a></li>
                                <li><a href="#">Dish <span>22</span></a></li>
                                <li><a href="#">Desserts <span>37</span></a></li>
                                <li><a href="#">Drinks <span>42</span></a></li>
                                <li><a href="#">Ocassion <span>14</span></a></li>
                            </ul>
                        </div>

                    
                    </div>
                </div>
            </div> <!-- .row -->
            
        </div> <!-- .container -->
    </div>
    
    <!-- .page-section -->
@endsection
