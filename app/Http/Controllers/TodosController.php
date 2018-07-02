<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index() {
      $todos = Todo::all();
      return view('Todos/index')->with('todos', $todos);
    }

    public function new() {
      return view('Todos/new');
    }

    public function create(Request $request) {
      $todo = new Todo;
      $todo->todo = $request->todoTask;
      error_log($todo);
      $todo->save();
      return redirect('/todos/');
    }

    public function destroy($id) {
      Todo::find($id)->delete();
      return redirect('/todos/');
    }

    public function show($id) {
      $todo = Todo::find($id);
      return view('Todos/show')->with('todo', $todo);
    }

    public function update(Request $request, $id) {
      $todo = Todo::find($id);
      $todo->todo = $request->todoTask;
      $todo->save();
      return redirect('/todos/');
    }

    public function completed($id) {
      $todo = Todo::find($id);
      $todo->completed = 1;
      $todo->save();
      return redirect('/todos/');
    }
}
