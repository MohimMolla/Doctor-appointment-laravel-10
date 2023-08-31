@extends('layouts.admin-templeate')
@section('content')
    {{-- message show end --}}
    <div class="container">
        <div class="row">
            <div class="col-8 align-content-center">
                <form action="{{ route('user_update', $users->id) }}" method="POST">
                    @csrf
                    
                   
                        <div style="padding: 15px;">
                            <label class="form-label">User Name:</label>
                            <input type="text"class="form-control" name="name" value="{{ $users->name }}">
                        </div>
                        <div style="padding: 15px;">
                            <label class="form-label">Email Address:</label>
                            <input type="email"class="form-control" name="email" value="{{ $users->email }}">
                        </div>
                        <div style="padding: 15px;">
                            <label class="form-label">Role : </label>
                           
                            <select name="role" id="role" style="color:black">
                                <option value="{{ $users->role }}">{{ $users->role }}</option>
                                @if ($users->role === 2)
                                    <option value="1">1</option>
                                @elseif($users->role ===1)
                                    <option value="2">2</option>
                                @endif
                            </select>
                            

                        </div>
                        <div>
                            {{-- <input  value="Submit" class="btn btn-success"> --}}
                            <button class="btn btn-success">Submit</button>
                       
                        </div>
                    
                </form>
            </div>
        </div>
    </div>
        <!-- container-scroller -->
    @endsection
