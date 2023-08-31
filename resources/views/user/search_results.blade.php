@extends('layouts.app')

@section('content')
    <h2>Search Results for "{{ $searchTerm }}"</h2>
    @if ($doctors->isEmpty())
        <p>No results found.</p>
    @else
        @foreach ($doctors as $doctor)
            <div>
                <h3>{{ $doctor->name }}</h3>
                @if ($doctor->speciality)
                    <p>Speciality: {{ $doctor->speciality->name }}</p>
                @endif
                <!-- Display other doctor information as needed -->
            </div>
        @endforeach
    @endif
@endsection
