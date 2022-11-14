@extends('layout.mainlyout')
@section('title', 'Add Book')

@section('content')
    <h1>Add New book</h1>

<div class="d-flex justify-content-end">
    <a href="books" class="btn btn-info">Back</a>
</div>

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
        <form action="book-add" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="code">Code</label>
                <input type="text" name="book_code" id="code" class="form-control" placeholder="Book Code" value="{{ old('book_code') }}">
            </div>
            <div class="form-group" style="margin-top: 20px;">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Book Title" value="{{ old('title') }}">
            </div>
            <div class="form-group" style="margin-top: 20px;">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary" >Submit</button>
            </div>
        </form>
@endsection