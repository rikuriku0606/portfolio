<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::where('status', false)->get();
        return view('todos.index', compact('todos'));
        //return view('articles.create' , compact('todos'));
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request, Todo $todo)
    {
        $todo = new Todo;
        $input = $request['todo'];
        $input += ['user_id' => $request->user()->id];  
        $todo->fill($input)->save();
        return redirect('/todos/');
    }
    
    public function show(Todo $todo)
    {
        return view('articles.create', compact('todo'));
    }
    
    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }
    
    public function update(Request $request, $id)
    {
        if ($request->status === null) {
            
            $todo = Todo::find($id);
            $input_todo = $request->input('todo');
            $todo->fill($input_todo)->save();
            
        }else{
            
            $todo = Todo::find($id);
            $todo->status = true;
            $todo->save();
            
        }
        /*$input = $request['todo'];
        $input += ['user_id' => $request->user()->id];*/
        return redirect('/todos/');
    }
    
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect('/todos');
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }

}
