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
            <a href="{{ route('list_invisibles') }}" class="btn btn-outline-danger">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"></path>
                    <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"></path>
                    <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"></path>
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
                                        <a href="{{route('task_done', ['id' => $t->id])}}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    @else
                                        <a href="{{route('task_undone', ['id' => $t->id])}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-check"></i>
                                        </a>
                                    @endif

                                    {{-- editar --}}
                                    <a href="{{route('edit_task', ['id' => $t->id])}}" class="btn btn-warning btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>

                                    {{-- visivel/invisivel --}}
                                    @if ($t->visible === 1)
                                <a href="{{route('task_invisible',['id'=>$t->id])}}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    @else
                                        <a href="{{route('task_visible',['id'=>$t->id])}}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-eye-slash"></i>
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
