@extends('layout.mainlyout')
@section('title', 'User Detail')

@section('content')
    <h1>User Detail</h1>
    <div class="d-flex justify-content-end">
        @if ($user->status == 'inactive')
            <a href="/user-acc/{{ $user->slug }}" class="btn btn-info mt-3 me-5">Acc User</a>
        @endif
    </div>

    <div class="mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="my-5 w-25">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" value="{{ $user->username }}" disabled>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="phone" class="form-control" id="phone" value="{{ $user->phone }}" disabled>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" id="address" cols="30" rows="7" class="form-control" disabled style="resize: none;">{{ $user->address }}</textarea>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" value="{{ $user->status }}" disabled>
        </div>
    </div>
@endsection