@extends('layouts.master')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">New Task
            <a href="{{ route('home') }}" class="btn btn-outline-primary">
                <i class="fa fa-undo"></i>
            </a>
        </h1>
        <p class="lead">Adicione uma nova tarefa à sua To-Do list.</p>
        <div class="my-4">

            <form class="form-inline" action="{{route('edit_task_submit')}}" method="post">
                @csrf
                <input type="hidden" name="id_task" class="form-control" value="{{$task->id}}">

                <div class="form-group mx-sm-1 mb-2">
                    <input type="text" name="text_edit_task" class="form-control" value="{{$task->task}}">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Update</button>
            </form>
        </div>

    </div>
</div>

@endsection
