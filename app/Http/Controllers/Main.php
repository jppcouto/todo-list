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

    public function new_task_submit(Request $request) 
    {
        // echo '<pre>';
        // print_r($request->input());
        // print_r($request->all());
        // die();

        // //solicita qual o método utilizado pelo request
        // if(($_SERVER['REQUEST_METHOD']) == 'POST') {

        // }
        // //solicita qual o método utilizado pelo request
        // if(!$request->isMethod('post')){
        //     die('URL errada');
        // }

        $new_task = $request->input('text_new_task');
        
        //Instaciação da class Task()
        $task = new Task();

        //no objeto $task existe uma coluna chamada 'task' que será igual ao valor do input
        $task->task = $new_task;

        //inserção do registo na BD
        $task->save();

        echo 'Done!';
    }
}
