@extends('layout')

@section('content')
  <h1>Create new Task To Do:</h1>
  <div class="w-25 p-3">
    <form action="create" method="post">
      <div class="form-group">
        {{ csrf_field() }}
        <input class="form-control" type="text" name="todoTask" id="todoTask">
        <input class="btn btn-primary" type="submit" value="Submit">
      </div>
    </form>
  </div>
@stop