@extends('layout.mainlyout')
@section('title', 'Category')

@section('content')
    <h1>Category list</h1>
    <div class="d-flex justify-content-end">
        <a href="category-add" class="btn btn-primary mt-3 me-5">Add Category</a>
        <a href="category-deleted" class="btn btn-secondary mt-3">View Delete Data</a>
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
                                    <a href="category-edit/{{ $category->slug }}" style="text-decoration: none;">Edit</a>
                                    @csrf
                                    @method('destroy')
                                    <a href="category-delete/{{ $category->slug }}" style="text-decoration: none;" class="btn btn-danger">Delete</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection