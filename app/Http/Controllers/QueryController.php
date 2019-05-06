<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class QueryController extends Controller
{
    public function eloquentAll()
    {
        $users = User::all();
        $title = "Todos los usuarios (all)";

        return view('query.methods', compact('users', 'title'));
    }

    public function eloquentGet($gender)
    {
        $users = User::where('gender', $gender)
            ->get();

        $title = "Todos los usuarios (get)";

        return view('query.methods', compact('users', 'title'));
    }

    public function eloquentGetCustom()
    {
        $users = User::where('gender', 'f')
            ->get(['id', 'name', 'gender', 'biography']);

        $title = "Todos los usuarios (get custom con array)";

        return view('query.methods', compact('users', 'title'));
    }

    public function eloquentDelete($id)
    {
        $user = User::find($id);
        $user->delete();

        return view('page.delete');
    }

    public function eloquentLists()
    {
        $users = User::orderBy('name', 'asc')
            ->lists('id', 'name');

        return view('query.lists', compact('users'));
    }

    public function eloquentFirstLast()
    {
        $user = User::first();
        $users = User::all();
        $last = $users->last();

        return view('query.first-last', compact('user', 'last'));
    }

    public function eloquentPaginate()
    {
        $users = User::orderBy('id', 'desc')
            ->paginate();

        return view('query.paginate', compact('users'));
    }
}
