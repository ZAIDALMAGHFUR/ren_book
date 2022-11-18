@extends('layout.mainlyout')
@section('title', 'Book')

@section('content')
<div class="row my-5">
    @foreach ($books as $b)
        <div class="card" style="width: 18rem; margin-left: 10px; margin-bottom: 10px">
            <img src="{{ ('images/storage/cover/'.$b->cover) }}" class="card-img-top" alt="..." style="border-radius: 10px; margin: 10px;" draggable="false">
                <div class="card-body">
                <h5 class="card-title">{{ $b->book_code}}</h5>
                <p class="card-text">{{ $b->title }}</p>
                <a href="#" class="btn {{ $b->status == 'in stock' ? 'btn-info' : 'btn-danger' }} ">{{ $b->status }}</a>
            </div>
        </div>
    @endforeach
</div>

@endsection