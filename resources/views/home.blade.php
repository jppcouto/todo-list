@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3>TO DO LIST</h3>
                <hr>
                <div class="my-2">
                <a href="{{route('new_task')}}" class="btn btn-primary">Create task...</a>
                </div>
            </div>
        </div>
    </div>
@endsection