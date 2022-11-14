<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book', ['books' => $books]);
    }

    public function add()
    {
        return view('book-add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_code' => 'required|unique:books',
            'title' => 'required|max:255',
        ]);

        if ($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newwName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newwName);
        }

        $request['cover'] = $newwName;
        $Book = Book::create($request->all());
        return redirect('books')->with('status', 'Book has been added!');
    }

    public function edit($slug)
    {
        $book = Book::where('slug', $slug)->first();
        return view('book-edit', ['book' => $book]);
    }

    // public function update(Request $request, $slug)
    // {
    //     $request->validate([
    //         'book_code' => 'required|unique:books',
    //         'title' => 'required|max:255',
    //     ]);
    //     return redirect('books')->with('status', 'Book has been updated!');
    // }

    public function delete($slug)
    {
        $book = Book::where('slug', $slug)->first();
        return view('book-delete', ['book' => $book]);
    }

    public function destroy($slug)
    {
        $book = Book::where('slug', $slug)->first();
        $book->delete();
        return redirect('books')->with('status', 'Book has been deleted!');
    }

    public function deletedbook()
    {
        $books = Book::onlyTrashed()->get();
        return view('book-deleted', ['books' => $books]);
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'book_code' => 'required|unique:books',
            'title' => 'required|max:255'
        ]);
        $book = book::where('slug', $slug)->first();
        $book->update($request->all());
        return redirect('books')->with('success', 'Book updated successfully.');
    }

    public function deleted()
    {
        $books = Book::onlyTrashed()->get();
        return view('book-deleted', ['books' => $books]);
    }

    public function restore($slug)
    {
        $book = Book::where('slug', $slug)->withTrashed()->first();
        $book = Book::onlyTrashed()->get();
        $book->reverse();
        return redirect('books')->with('status', 'Book has been restored!');
    }
        // public function restore($slug)
    // {
    //     $category = Category::onlyTrashed()->where('slug', $slug)->first();
    //     $category->restore();
    //     return redirect('categories')->with('success', 'Category restored successfully.');
    // }
}