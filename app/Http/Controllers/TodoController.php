<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use App\Models\Tag;
use App\Models\Tag_todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::where('status', false)->get();
        $tags = Tag::all();
        return view('todos.index', compact('todos','tags'));
        
        
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        $todo = new Todo();
        //$todo インスタンスに、$input_todo 配列のデータを埋め込む.fill() メソッドは、モデルの属性に配列の値を設定する
        $input_todo = $request['todo'];
        $input_todo += ['user_id' => $request->user()->id];

        $todo->fill($input_todo)->save();
        $todo->tags()->attach($request->tags); //attachメソッドを使って中間テーブルにデータを保存

        return redirect('/todos/');
        
        //タイムリミットの設定
        $time_limit = Carbon::parse($request->input('time_limit'));
        Todo::create([
            'time_limit' => $time_limit,
        ]);
    }
    
    public function show(Todo $todo)
    {
        
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