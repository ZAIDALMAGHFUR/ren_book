@extends('layout.mainlyout')
@section('title', 'User Register')

@section('content')
    <h1>User List Register</h1>
    <div class="d-flex justify-content-end">
        <a href="/users" class="btn btn-primary mt-3 me-5">Back</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($register as $key)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $key->username }}</td>
                <td>
                    @if ( $key->phone)
                        {{ $key->phone }}
                    @else
                        <span class="badge bg-danger">No Phone Number</span>
                    @endif
                </td>
                <td>{{ $key->status }}</td>
                <td>
                    <a href="/user-detail/{{ $key->slug }}" class="btn btn-info me-2">Detile</a>
                </td>
            </tr>
            @endforeach
        </tbody>
@endsection