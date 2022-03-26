@extends('layouts.app')
@section('content')

 
<div class="d-flex justify-content-center mb-5">
    <h1 class="mr-4">Todolist</h1>
    <a href="{{url('todo/create')}}" type="button" class="btn btn-primary mb-2">Create</a>
</div>
@include('flash')
 
<div class="d-flex justify-content-center">

<ul class="list-group">
    @foreach ($todos as $todo)
        <li class="list-group-item display-4">

        @if ($todo->completed)

        <s>{{$todo->title}}</s>

        @else
        {{$todo->title}}
        @endif

    <a href="{{route('todo.edit', $todo->id)}}" type="button" class="btn btn-primary mb-2">Edit</a>


@if ($todo->completed)
<a type="button" class="btn btn-danger mb-2"
    onclick="event.preventDefault();
    document.getElementById('form-incomplete-{{$todo->id}}').submit()">Completed</a>

<form method="post" id="{{'form-incomplete-'.$todo->id}}" 
    action="{{route('todo.incomplete',$todo->id)}}" style="display: none">
    @csrf
    @method('delete')
</form>

@else
   <a type="button" class="btn btn-success mb-2"
    onclick="event.preventDefault();
    document.getElementById('form-complete-{{$todo->id}}').submit()">Check</a>

<form method="post" id="{{'form-complete-'.$todo->id}}" 
    action="{{route('todo.complete',$todo->id)}}" style="display: none">
   @csrf
   @method('put')
</form>
@endif

<a type="button" class="btn btn-warning mb-2"
    onclick="event.preventDefault();
   if(confirm('Are you really want to Delete?')){
    document.getElementById('form-delete-{{$todo->id}}').submit()}">Delete</a>
   

<form method="post" id="{{'form-delete-'.$todo->id}}" 
    action="{{route('todo.destroy',$todo->id)}}" style="display: none">
    @csrf
    @method('delete')
</form>
    @endforeach
</ul>
</div>

@endsection