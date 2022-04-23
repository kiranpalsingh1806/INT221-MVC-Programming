@extends('layouts.app')
@section('content')

<div class="container">
<h1 class="text-center mb-4">Update Todolist</h1>
@include('flash') {{--  this showing flash meessage  --}}

<div class="d-flex justify-content-center">
<form class="form-inline" method="POST" action="{{route('todo.update', $todo->id)}}">
        @csrf
        @method('patch')
        <div class="form-group mx-sm-3 mb-2">
          <textarea name="description">
            {{$todo->description}}
          </textarea>
            </div>
        <div class="form-group mx-sm-3 mb-2">
        <input type="text" class="form-control" value="{{$todo->title}}" name="title">
        </div>
        <button class="btn btn-primary mb-2" type="submit" value="update">Update</button>
    </form>       
    
    <a href="{{route('todo.index')}}" type="button" class="btn btn-dark mb-2 ml-3">back</a>
</div>
</div>
@endsection
 