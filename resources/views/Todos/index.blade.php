@extends('layout')

@section('content')
  <h1>
    Todo
  </h1>
  <div>
    <ul class="list-group text-center" >
      @foreach ($todos as $todo)
          <li class="list-group-item list-group-item-action w-75" id= "{{ $todo->id }} ">
            <div class="d-flex">
              <div class="p-2">
                {{ $todo->todo }}
              </div>
              <div class="ml-auto p-2">
                @if ( $todo->completed )
                  <button type="button" class="btn btn-warning " disabled>Completed</button>
                @else
                  <form action="/todos/completed/{{ $todo->id }}" method="POST">
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-success" value="Complete?"></input>
                  </form>
                @endif
                <a href="/todos/{{ $todo->id }}" class="btn btn-info">Edit</a>
                <a href="/todos/delete/{{ $todo->id }}" class="btn btn-danger" >Delete</a>
              </div>
            </div>
          </li>
      @endforeach
    </ul>
    <div>
      <a href="/todos/new">Create New Item</a>
    </div>
  </div>
@stop