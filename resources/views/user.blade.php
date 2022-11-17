@extends('layout.mainlyout')
@section('title', 'User List')

@section('content')
    <h1>User List</h1>
    <div class="d-flex justify-content-end">
        <a href="/register-user" class="btn btn-primary mt-3 me-5">View Register User</a>
        <a href="/user-kehapus" class="btn btn-secondary mt-3">View Bannet User</a>
    </div>

    <div class="mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
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
            @foreach($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->username }}</td>
                    <td>
                        @if ($user->phone == null)
                            <span class="badge bg-danger">No Phone Number</span>
                        @endif
                            {{ $user->phone }}
                    </td>
                    <td>{{ $user->status }}</td>
                    <td>
                        <a href="/user-detail/{{ $user->slug }}" class="btn btn-info me-2">Detile</a>
                        <a href="/user-ban/{{ $user->slug }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
@endsection