<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class Main extends Controller
{
    public function home() 
    {
        //get available tasks
        $tasks = Task::all();
        //$tasks = Task::where('Visible',1)->get();
        return view('home',['tasks' => $tasks]);
    }

    public function new_task() 
    {
        //return view('new');
        echo 'new task';
    }
}
