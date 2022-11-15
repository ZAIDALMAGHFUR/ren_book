@extends('layout.mainlyout')
@section('title', 'deleted Book')

@section('content')
    <h1>Deleted Book list</h1>
    <div class="d-flex justify-content-end">
        <a href="books" class="btn btn-primary mt-3 me-5">Back</a>
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
                        <th>title</th>
                        <th>Status</th>
                        <th>Book_code</th>
                        <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($books as $b)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $b->title }}</td>
                            <td>{{ $b->status }}</td>
                            <td>{{ $b->book_code }}</td>
                            <td>
                                <form action="/books/{{ $b->id}}" method="post">
                                    @csrf
                                    @method('destroy')
                                    <a href="book-restore/{{ $b->id }}" style="text-decoration: none;" class="btn btn-info">Restore</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection