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
        return view('new_task');
    }

    public function new_task_submit(Request $r) 
    {
        $texto = $r->input('text_new_task');
        echo $texto;
    }
}
