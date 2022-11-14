@extends('layout.mainlyout')
@section('title', 'Edit Book')

@section('content')
    <h1>Edit Book</h1>

    <div class="mt-5 w-50">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/book-edit/{{ $book->slug }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="code">Code</label>
                <input type="text" name="book_code" id="code" class="form-control" placeholder="Book Code" value="{{ $book->book_code }}">
            </div>
            <div class="form-group" style="margin-top: 20px;">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Book Title" value="{{ $book->title }}">
            </div>
            <div class="form-group" style="margin-top: 20px;">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" value="{{ $book->cover }}">
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary" >Update</button>
            </div>
        </form>
@endsection