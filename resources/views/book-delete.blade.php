@extends('layout.mainlyout')
@section('title', 'Delete Book')

@section('content')
    <h2>Are you sure to delete book {{ $book->book_code }} ?</h2>
    <div class="mt-5">
        <a href="/book-destroy/{{ $book->slug }}" class="btn btn-danger me-5"> Sure</a>
        <a href="/books" class="btn btn-info">Cancle</a>
    </div>
@endsection 