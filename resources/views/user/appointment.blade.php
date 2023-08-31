<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>


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
                {{-- Add extra field for doctor name start --}}
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="speciality" id="speciality_id" class="custom-select" required>
                        {{-- get this value from speciality table --}}
                        <option value="-1">Speciality</option>
                        @foreach ($sp as $Speciality)
                            <option value="{{ $Speciality->id }}">{{ $Speciality->name }}
                            </option>
                        @endforeach
                    </select>

                </div>

                {{-- <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input name="date" type="date" class="form-control">
                </div> --}}
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input name="date" type="date" class="form-control" min="{{ date('Y-m-d') }}" required>
                </div>



                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="doctor_name" id="doctor_id" class="custom-select" required>
                        <option value="-1">Doctor</option>

                        {{-- @foreach ($doctors as $doctor)
                            <option value="{{ $doctor->name }}">{{ $doctor->name }}</option>
                        @endforeach --}}

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


@section('appoint-js')
 <script>
        function decorate_doctor(d) {
            // console.log(d);
            $h = "<option value='-1'>Doctor</option>";
            for (const k in d) {
                $h += "<option value='" + k + "'>" + d[k] + "</option>";
            }
            $("#doctor_id").html($h);
        }

        $(document).ready(function() {
            $("#speciality_id").change(function() {
                let id = $(this).val();

                if (id == "-1") {
                    return;
                }
                let url = "{{ url('appoint_sp') }}/" + id;
                // alert(url);
                // alert(id);
                $.get(url, {}, function(d) {

                    decorate_doctor(d);
                });


            })
        });
    </script>

@endsection

