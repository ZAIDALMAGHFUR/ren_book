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
        $categories = Category::all();
        return view('book-edit', ['book' => $book, 'categories' => $categories]);
    }


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
        $newName = null;
        if ($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
        }

        // $request['cover'] = $newName;
        $book = Book::where('slug', $slug)->first();
        $book->update($request->all());

        if ($request->categories) {
            $book->categories()->sync($request->categories);
        }
        return redirect('books')->with('status', 'Book has been updated!');
    }

    public function deleted()
    {
        $books = Book::onlyTrashed()->get();
        return view('book-deleted', ['books' => $books]);
    }

    public function restore($id = null)
    {
        $book = Book::onlyTrashed()->where('id', $id)->first();
        $book->restore();
        return redirect('books')->with('status', 'Book has been restored!');
    }
}