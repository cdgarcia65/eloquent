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
}
