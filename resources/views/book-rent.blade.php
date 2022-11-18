@extends('layout.mainlyout')
@section('title', 'Book Rent')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="row my-5 w-60">
    <h1 class="md-5">Book Rent </h1>
    
        <div class="mt-5">
            @if (session('message'))
                <div class="alert {{ session('alert-class')}}">
                    {{ session('message') }}
                </div>
            @endif
        </div>


<form action="book-rent" method="post">
    @csrf
    <div class="mb-3">
        <label for="user" class="form-label">User</label>
        <select name="user_id" id="user" class="form-control user">
            <option value="">Select User</option>
            @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->username }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="book" class="form-label">Book</label>
        <select name="book_id" id="book" class="form-control book">
            <option value="">Select Book</option>
            @foreach($books as $book)
            <option value="{{ $book->id }}">{{ $book->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.user').select2();
        $('.book').select2();
    }); 
</script>
@endsection