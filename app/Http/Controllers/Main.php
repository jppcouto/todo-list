<?php

namespace App\Http\Controllers;

use App\Models\Task;
use DateTime;
use Illuminate\Http\Request;

class Main extends Controller
{
    public function home() 
    {
        //get available tasks
        $tasks = Task::all();
        //$tasks = Task::orderBy('created_at','desc')->get();
        $tasks = Task::where('Visible',1)->get();
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

        //nova tarefa ficará invisivel.
        //$task->visible = 0;

        //inserção do registo na BD
        $task->save();

        return redirect()->route('home');
    }

    public function task_done($id) 
    {
        //update the task to DONE
        $task = Task::find($id);
        $task->done = new DateTime();
        $task->save();
        return redirect()->route('home');
    }

    public function task_undone($id) 
    {
        //update the task to UNDONE
        $task = Task::find($id);
        $task->done = null;
        $task->save();
        return redirect()->route('home');
    }

    public function edit_task($id) 
    {
        //get selected task
        $task = Task::find($id);

        //display edit task form
        return view('edit_task', ['task' => $task]);
    }

    public function edit_task_submit(request $request) 
    {
        $id_task = $request->input('id_task');
        $edit_task = $request->input('text_edit_task');

        $task = Task::find($id_task);
        $task->task = $edit_task;
        $task->save();

        return redirect()->route('home');
    }
}
