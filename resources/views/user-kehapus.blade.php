@extends('layout.mainlyout')
@section('title', 'User Deleted')

@section('content')
    <h1>Deleted User list</h1>
    <div class="d-flex justify-content-end">
        <a href="/users" class="btn btn-primary mt-3 me-5">Back</a>
    </div>

    <div class="mt-3">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    </div>
        <div class="my-5">
            <table class="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($users as $u)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $u->username }}</td>
                            <td>
                                <form action="/categories/{{ $u->id }}" method="post">
                                    @csrf
                                    @method('destroy')
                                    <a href="user-restore/{{ $u->slug }}" style="text-decoration: none;" class="btn btn-info">Restore</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection