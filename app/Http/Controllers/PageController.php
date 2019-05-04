<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class PageController extends Controller
{
    public function home()
    {
        $users = User::orderBy('id', 'desc')
            ->take(10)
            ->get();

        return view('page.home', compact('users'));
    }
}
