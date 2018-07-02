@extends('layout')

@section('content')
  <h1>
    Todo
  </h1>
  <div>
    <ul class="list-group text-center" >
      @foreach ($todos as $todo)
          <li class="list-group-item list-group-item-action w-75" id= "{{ $todo->id}} ">
            <div class="d-flex">
              <div class="p-2">
                {{ $todo->todo }}
              </div>
              <div class="ml-auto p-2">
                @if ( $todo->completed)
                  <button type="button" class="btn btn-warning">Redo</button>
                @else
                  <button type="button" class="btn btn-success">Complete</button>
                @endif
                <button type="button" class="btn btn-info">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
              </div>
            </div>
          </li>
      @endforeach
    </ul>
  </div>
@stop