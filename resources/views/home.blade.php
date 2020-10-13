@extends('layouts.master')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">JotaTask
            <a href="{{ route('new_task') }}" class="btn btn-outline-primary">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                    <path fill-rule="evenodd"
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z">
                    </path>
                </svg>
            </a>
        </h1>
        <p class="lead">A simple To-Do List powered by Laravel Framework and developed by João Couto.</p>
        <div class="my-4">

        </div>
        <!--<div class="my-2">
            <a href="{{ route('new_task') }}" class="btn btn-primary">Create task...</a>
        </div>
        <hr>-->
        @if($tasks->count() === 0)
            <div class="shadow p-3 mb-5 bg-white rounded">Não existem tarefas a realizar</div>

        @else
            <div class="shadow p-3 mb-5 bg-white rounded">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <th>Tasks</td>
                        <th>Actions</td>  
                    </thead>

                    <tbody>
                        @foreach ($tasks as $t)
                            <tr>
                                <td style="width: 70%">{{$t->task}}</td>
                                <td>
                                    {{-- Done/not done --}}
                                    @if ($t->done == null)
                                        <a href="{{route('task_done', ['id' => $t->id])}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-check"></i>
                                        </a>
                                    @else
                                    <a href="{{route('task_undone', ['id' => $t->id])}}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    @endif

                                    {{-- editar --}}
                                    <a href="{{route('edit_task', ['id' => $t->id])}}" class="btn btn-warning btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>

                                    {{-- visivel/invisivel --}}
                                    @if ($t->visible === 1)
                                <a href="{{route('task_invisible',['id'=>$task->id])}}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-eye-slash"></i>
                                        </a>
                                    @else
                                        <a href="{{route('task_visible',['id'=>$task->id])}}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <p>At the moment you added <strong>{{$tasks->count()}}</strong> task(s).</p>
            </div>
        @endif
        <!--<h1 style="color: #5155de; font-size: 80px;margin-bottom:-80px">JOTATASK</h1>-->
    </div>
</div>

@endsection
