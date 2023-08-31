@extends('layouts.admin-templeate')
@section('content')
                {{-- {{ url('store_doctor') }} --}}
                <form action=" {{ url('sendemail', $data->id) }}" method="POST">
                    @csrf
                    <fieldset>
                        <legend>Add Doctor</legend>
                        <div style="padding: 15px;">
                            <label for="">Greeting</label>
                            <input type="text" style="color: black;" name="greeting">
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Body:</label>
                            <input type="text" style="color: black;" name="body">
                        </div>

                        <div style="padding: 15px;">
                            <label for="">Action Text</label>
                            <input type="text" style="color: black;" name="actiontext">

                        </div>

                        <div style="padding: 15px;">
                            <label for="">Action Url</label>
                            <input type="text" style="color: black;" name="actionurl">

                        </div>
                        <div style="padding: 15px;">
                            <label for="">End part</label>
                            <input type="text" style="color: black;" name="endpart">

                        </div>

                        <div style="padding: 15px;">
                            <input type="submit" value="Submit" class="btn btn-success">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
    @endsection
