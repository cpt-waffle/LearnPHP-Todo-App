<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index() {
      return view('Todos/index');
    }

    public function new() {
      return view('Todos/new');
    }
}
