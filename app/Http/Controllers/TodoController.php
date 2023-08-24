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
        //$tag = Tag::find($id);
        return view('todos.index', compact('todos','tags'));
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        //$todo インスタンスに、$input_todo 配列のデータを埋め込む.fill() メソッドは、モデルの属性に配列の値を設定する
        //$todo->fill($input_todo)->save();
        //$tag インスタンスに、$input_tag 配列のデータを埋め込む.fill() メソッドは、モデルの属性に配列の値を設定する
        //$tag->fill($input_tag)->save();
        $todo = new Todo();
        $input_todo = $request['todo'];
        $input_todo += ['user_id' => $request->user()->id];
        
        /*$todo->title = $request->input('title');
        $todo->body = $request->input('body');*/
        $todo->fill($input_todo)->save();
        $todo->tags()->attach($request->tags);
        /*$tag = new Tag();
        $input_tag = $request['tag']; // タグ名を取得
        $tag->fill($input_tag)->save();
        //$input_tags = $request->tags_array;  //subjects_arrayはnameで設定した配列名
        //attachメソッドを使って中間テーブルにデータを保存
        $todo->subjects()->attach($input_tag); */
        
        // タグとToDoリストを紐づける
        /*$tag_todo = new Tag_todo();
        $tag_todo->tag_id = $tag->id; // 新しく作成したタグのID
        $tag_todo->todo_id = $todo->id; // 新しく作成したToDoリストのID
        $tag_todo->save();*/

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