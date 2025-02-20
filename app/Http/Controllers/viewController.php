<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function index()
    {
        return  view('dashboard');
    }
    public function cree(){
        return view('event');
    }
    public function listes(){
        return view('liste');

    }
}
