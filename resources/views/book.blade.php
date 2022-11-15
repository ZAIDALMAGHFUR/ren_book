@extends('layout.mainlyout')
@section('title', 'Book')

@section('content')
    <h1>Book list</h1>
    <div class="d-flex justify-content-end">
        <a href="book-add" class="btn btn-primary mt-3 me-5">Add New Book</a>
        <a href="book-deleted" class="btn btn-secondary mt-3">View Delete Data</a>
    </div>

    <div class="mt-3">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    </div>
        <div class="my-5">
            <table class="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>book_code</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $book->book_code }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->status }}</td>
                            <td>
                                <a href="book-edit/{{ $book->slug }}" style="text-decoration: none;" class="btn btn-info me-2">Edit</a>
                                @method('destroy')
                                <a href="book-delete/{{ $book->slug }}" style="text-decoration: none;" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection