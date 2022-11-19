<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\RentLogs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BookRentController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', 1)->get();
        $books = Book::all();
        return view('book-rent', ['users' => $users, 'books' => $books]);
    }

    public function store(Request $request)
    {
        $request ['rent_date'] = Carbon::now()->toDateString();
        $request ['return_date'] = Carbon::now()->addDays(3)->toDateString();

        $book = Book::findOrFail($request ->book_id)->only('status');
        if ($book['status'] != 'in stock') {
            Session::flash('message', 'canot rent this book');
            Session::flash('alert-class', 'alert-danger');
            return redirect('book-rent');
        } else {
            $count = RentLogs::where('user_id', $request->user_id)->where('return_date', '>=', Carbon::now()->toDateString())->count();
            if ($count >= 3) {
                Session::flash('message', 'user has reached the maximum number of books');
                Session::flash('alert-class', 'alert-danger');
                return redirect('book-rent');
            } else {
                try {
                    DB::beginTransaction();
                    RentLogs::create($request->all());
                    $book = Book::findOrFail($request->book_id);
                    $book->status = 'not avalible';
                    $book->save();
                    DB::commit();

                    Session::flash('message', 'rent book susccess!!!');
                    Session::flash('alert-class', 'alert-success');
                    return redirect('book-rent');
                } catch (\Throwable $th) {
                    DB::rollBack();
                }
            }
        }
    }

    public function view()
    {
        $users = User::where('id', '!=', 1)->get();
        $books = Book::all();
        return view('book-retrun', ['users' => $users, 'books' => $books]);
    }

    public function retrun(Request $request)
    {
        $request ['return_date'] = Carbon::now()->toDateString();
        $book = Book::findOrFail($request->book_id)->only('status');
        if ($book['status'] != 'not avalible') {
            Session::flash('message', 'canot return this book');
            Session::flash('alert-class', 'alert-danger');
            return redirect('book-retrun');
        } else {
            $count = RentLogs::where('user_id', $request->user_id)->where('return_date', '>=', Carbon::now()->toDateString())->count();
            if ($count == 0) {
                Session::flash('message', 'user has not rented this book');
                Session::flash('alert-class', 'alert-danger');
                return redirect('book-retrun');
            } else {
                try {
                    DB::beginTransaction();
                    $rent = RentLogs::where('user_id', $request->user_id)->where('book_id', $request->book_id)->where('return_date', '>=', Carbon::now()->toDateString())->first();
                    $rent->update($request->all());
                    $book = Book::findOrFail($request->book_id);
                    $book->status = 'in stock';
                    $book->save();
                    DB::commit();

                    Session::flash('message', 'return book susccess!!!');
                    Session::flash('alert-class', 'alert-success');
                    return redirect('book-retrun');
                } catch (\Throwable $th) {
                    DB::rollBack();
                }
            }
        }
    }
}