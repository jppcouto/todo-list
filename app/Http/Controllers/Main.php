<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function home() 
    {
        return view('home');
    }

    public function new_task() 
    {
        //return view('new');
        echo 'new task';
    }
}
