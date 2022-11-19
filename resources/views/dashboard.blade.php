@extends('layout.mainlyout')
@section('title', 'Dashboard')

<style>
    .card-data{
        border: solid 1px;
        border-radius: 5px;
        padding: 20px 50px;
    }

    .card-data i {
        font-size: 80px;
    }

    .card-desc {
        font-size: 20px;
    }

    .card-count {
        font-size: 15px;
    }
</style>


@section('content')
<h2>Welcome {{ Auth::user()->username }}</h2>
<div class="d-lg-flex">
    <div class="row mt-5" style="padding-right: 5rem;">
        <div class="col-lg-4">
            <div class="card-data" style="background-color: aquamarine; width: 18rem; ">
                <div class="row">
                    <div class="col-6"><i class="bi bi-journals"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center">
                        <div class="card-desc">BOOKS</div>
                        <div class="card-count">{{ $book_count }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5" style="padding-right: 5rem;">
        <div class="col-lg-4">
            <div class="card-data" style="background-color: aqua; width: 18rem;">
                <div class="row">
                    <div class="col-6"><i class="bi bi-bookmarks-fill"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center">
                        <div class="card-desc">CATEGORIES</div>
                        <div class="card-count">{{ $category_count }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5"  style="padding-right: 5rem;">
        <div class="col-lg-4">
            <div class="card-data" style="background-color: orangered; width: 18rem;">
                <div class="row">
                    <div class="col-6"><i class="bi bi-person-vcard-fill"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center">
                        <div class="card-desc">USERS</div>
                        <div class="card-count">{{ $user_count }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection