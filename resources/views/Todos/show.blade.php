@extends('layout')
@section('content')
  <h1>Edit Todo</h1>
  <div class="w-25 p-3">
    <form action="/todos/{{ $todo->id }}" method="post">
      <div class="form-group">
        {{ csrf_field() }}
        <input id="todoTask" class="form-control" type="text" name="todoTask" value="{{ $todo->todo }}">
        <input class="btn btn-primary" type="submit" value="Submit">
      </div>
    </form>
  </div>
@stop