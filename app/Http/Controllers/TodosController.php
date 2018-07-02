<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index() {
      $todos = Todo::all();
      return view('Todos/index')->with('todos', $todos)
                                ->with('test', $test);
    }

    public function new() {
      error_log("ROUTE POST /create has been hit :D");
      return view('Todos/new');
    }

    public function create(Request $request) {
      $todo = new Todo;
      $todo->todo = $request->todoTask;
      error_log($todo);
      $todo->save();
      return redirect('/todos/');
    }
}
