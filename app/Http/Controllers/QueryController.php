<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class QueryController extends Controller
{
    public function getAll()
    {
        $users = User::all();

        return view('query.all', compact('users'));
    }
}
