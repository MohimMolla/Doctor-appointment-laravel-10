@extends('layouts.templete')
@section('content')

    <div class=" bg-light pt-3">
        <div class="container">
            <div class="row justify-content-center">
                {{-- Speciality Button --}}
                <div class="col-6 col-sm-3 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <label for="Serch By">Search by speciality name :</label>
                    <select name="speciality" id="speciality_id" class="custom-select" required>
                        <option value="-1">Speciality</option>
                        @foreach ($sp as $Speciality)
                            <option value="{{ $Speciality->id }}">{{ $Speciality->name }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- Speciality Button --}}
                <div class="col-6 col-sm-3 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <label for="">Search by doctor name :</label>
                    <div class="d-flex ">
                        <input type="text" id="search-doctor-name" placeholder="Doctor Name " class="p-2 form-control">
                        <button id="searchButton" class="mx-3 p-2 btn-primary">Search</button>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
    {{-- search result container --}}

    <div class="bg-light pt-5 ">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-10">

                    <div class="row" id="searchResultContainer">

                        {{-- Dynamic section  --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- search result container end --}}
    
    {{-- Show All Doctor Start --}}
    <div class="bg-light">
       

        <div class="container">
           
            <div class="row justify-content-center">
              
                <h1>All Doctors List</h1>

                <div class="col-lg-10">

                    <div class="row">
                        @foreach ($doctors as $doctor)
                            {{-- Show  Dynamic information start  --}}
                            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">

                                <div class="card-doctor" style="height:390px">

                                    <div class="header">
                                        <img class="width:280px;" src="doctorimage/{{ $doctor->image }} " alt="">
                                        <div class="meta">
                                            <a href="#"><span class="mai-call"></span></a>
                                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                                        </div>
                                    </div>
                                    <a href="{{ url('/doctor-detailes', $doctor->id) }}">
                                        <div class="body mb-2">
                                            <p class="text-xl mb-0">{{ $doctor->name }}</p>
                                            <span class="text-sm text-grey">{{ $doctor->speciality }}</span>
                                        </div>
                                    </a>

                                </div>

                            </div>
                        @endforeach
                        {{-- Show  Dynamic information end  --}}
                    </div>


                </div>

            </div>

        </div>

        <!-- .container -->
    </div>
    {{-- Show All Doctor end --}}


@section('auto-script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function decorate_doctor(doctors) {
            // console.log(doctors);
            let html = ``;
            doctors.forEach(d => {
                html += `
                <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                    <div class="card-doctor" style="height:380px">
                        <div class="header">
                            <img class="width:280px;" src="{{ url('/doctorimage') }}/${d.image}" alt="">
                            <div class="meta">
                                <a href="#"><span class="mai-call"></span></a>
                                <a href="#"><span class="mai-logo-whatsapp"></span></a>
                            </div>
                        </div>
                        <a href="{{ url('/doctor-detailes') }}/${d.id}">
                            <div class="body mb-2">
                                <p class="text-xl mb-0">${d.name}</p>
                                <span class="text-xl text-grey text-center">${d.speciality}</span>
                            </div>
                        </a>
                    </div>
                </div>`;
            });

            $("#searchResultContainer").html(html);
        }

        $(document).ready(function() {
            // Code for search by speciality
            $("#speciality_id").change(function() {
                let id = $(this).val();

                if (id == "-1") {
                    return;
                }
                let url = "{{ url('speciality') }}/" + id;

                $.get(url, {}, function(d) {
                    decorate_doctor(d);
                });
            });


            // Code for search by name
            $("#searchButton").click(function() {
                let doctorName = $("#search-doctor-name").val(); // Use the correct input id
                let url = "{{ route('search-doctors-by-name') }}";

                $.post(url, {
                    doctor_name: doctorName
                }, function(data) {

                    // console.log(data);
                    let html = ``;
                    data.forEach(d => {
                        html += `
                <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                    <div class="card-doctor" style="height:380px">
                        <div class="header">
                            <img class="width:280px;" src="{{ url('/doctorimage') }}/${d.image}" alt="">
                            <div class="meta">
                                <a href="#"><span class="mai-call"></span></a>
                                <a href="#"><span class="mai-logo-whatsapp"></span></a>
                            </div>
                        </div>
                        <a href="{{ url('/doctor-detailes') }}/${d.id}">
                            <div class="body mb-2">
                                <p class="text-xl mb-0">${d.name}</p>
                                <span class="text-xl text-grey text-center">${d.speciality}</span>
                            </div>
                        </a>
                    </div>
                </div>`;
                    });

                    $("#searchResultContainer").html(html);
                });
            });
        });
    </script>
@endsection


<!-- .page-section -->
@endsection
