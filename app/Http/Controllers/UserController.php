<?php

namespace App\Http\Controllers;

use App\Models\RentLogs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $rentlogs = Rentlogs::with(['user', 'book'])->where('user_id', Auth::user()->id)->get();
        return view('profile', ['rentlogs' => $rentlogs]);
    }

    public function index()
    {
        $users = User::where('role_id', 2)-> where('status', 'active')->get();
        return view('user', ['users' => $users]);
    }

    public function register()
    {
        $register = User::where('status', 'inactive')-> where('role_id', 2) ->get();
        return view('register-user', ['register' => $register]);
    }

    public function show($slug)
    {
        $user = User::where('slug', $slug)->first();
        $rentlogs = RentLogs::with(['book', 'user'])->where('user_id', $user->id)->get();
        return view('user-detail', ['user' => $user, 'rentlogs' => $rentlogs]);
    }

    public function acc($slug)
    {
        $user = User::where('slug', $slug)->first();
        $user->status = 'active';
        $user->save();
        return redirect('user-detail/'. $slug)->with('success', 'User has been accepted');
    }

    public function hapus($slug)
    {
        $user = User::where('slug', $slug)->first();
        return view('user-delete', ['user' => $user]);
    }

    public function destroy($slug)
    {
        $user = User::where('slug', $slug)->first();
        $user->delete();
        return redirect('users')->with('success', 'User deleted successfully');
    }

    public function kehapus()
    {
        $users = User::onlyTrashed()->get();
        return view('user-kehapus', ['users' => $users]);
    }
    public function restore($slug)
    {
        $user = User::withTrashed()->where('slug', $slug)->first();
        $user->restore();
        return redirect('users')->with('success', 'User restored successfully');
    }
}