<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(Todo $todo)
    {
        $todos = Todo::all();
  
        return view('todos.index')->with(['todos' => $todo->get()]);
    }
    
    public function store(Request $request, Todo $todo)
    {
        
        $input = $request['todo'];
        $input += ['user_id' => $request->user()->id];  
        $todo->fill($input)->save();
        return redirect('/todos/' . $todo->id);
        
        /*$todo_name = $request->input('todo_name');
        dd($todo_name);*/
    }
    
    public function show(Todo $todo)
    {
        //return view('todos.show')->with(['todo' => $todo]);
    }
    
    public function update(TodoRequest $request, Todo $todo)
{
    $input_todo = $request['todo'];
    $input_todo += ['user_id' => $request->user()->id];
    $post->fill($input_post)->save();
    return redirect('/todos/' . $todo->id);
}
}
