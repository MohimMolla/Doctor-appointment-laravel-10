@extends('layouts.admin-templeate')
@section('content')
    <style>
        table,
        th,
        td {
            border: 2px rgb(43, 31, 31) solid;
            padding: 2px;
        }

        td img {
            height: 50px !important;
            max-width: 100%;
        }

        /* Ellipsis for long data */
        .ellipsis {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 50px;
            /* Adjust the value based on your layout */
        }
    </style>
    {{-- message show end --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Event Table</h6>
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-3" href="{{ route('event.create') }}">Event Create</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>ID</th>
                            <th>Name</th>
                            {{-- <th >Email</th> --}}
                            <th>Title</th>
                            <th>Description</th>

                            <th>Image</th>

                            <th>Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($event as $d)
                            <tr>
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->name }}</td>
                                <td>{{ $d->title }}</td>

                                <td class="ellipsis">{{ $d->description }}</td>

                                <td>
                                    <img src="{{ asset('events/' . $d->image) }}" height="100px" alt="">
                                </td>

                                <td>
                                    <a href="{{ route('event.edit', $d->id) }}"><i class="fa-solid fa-pen-to-square"
                                            style="color: #275db9;"></i></a> |
                                    <a href="#" onclick="deleteEvent({{ $d->id }})">
                                        <i class="fa-solid fa-trash" style="color: #c92626;"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $event->links() }}

        </div>
    </div>
    <script>
        function deleteEvent(eventId) {
            if (confirm('Are you sure you want to delete this event?')) {
                fetch('{{ route('event.destroy', '') }}/' + eventId, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Handle response, e.g., show a success message or refresh the page
                        console.log(data);
                        location.reload(); // Reload the page after successful deletion
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }
        }
    </script>
@endsection
