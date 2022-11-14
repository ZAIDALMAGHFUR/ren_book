@extends('layout.mainlyout')
@section('title', 'deleted Category')

@section('content')
    <h1>Deleted Category list</h1>
    <div class="d-flex justify-content-end">
        <a href="categories" class="btn btn-primary mt-3 me-5">Back</a>
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
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <form action="/categories/{{ $category->id }}" method="post">
                                    @csrf
                                    @method('destroy')
                                    <a href="category-restore/{{ $category->slug }}" style="text-decoration: none;" class="btn btn-info">Restore</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection