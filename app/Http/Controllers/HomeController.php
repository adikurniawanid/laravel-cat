<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        if (auth()->user()->roleId === 0) {
            return redirect('/admin');
        } else if (auth()->user()->roleId === 1) {
            return redirect('/user');
        }
    }
}
