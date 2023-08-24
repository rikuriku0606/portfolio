<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Todo;
use App\Models\Tag_todo;

class TagController extends Controller
{
     public function index()
    {
        //Tagモデルからデータを取得する
    }
    
    public function create()
    {
        // 新しいTodoを作成するフォームを表示する
        return view('tags.tag_create');
    }
    
    public function store(Request $request, Tag $tag)
    {
        // 他の処理も含めてフォームのデータを処理
        $input = $request['tag'];
        $tag->name = $input['name'];
        $tag->save();
        return redirect('/todos');
    }
    
    public function show(Tag $tag)
    {
        // 特定のTodoの詳細を表示する
    }
    
    public function edit($id)
    {
        // 特定のTodoの編集フォームを表示する
        $tag = Tag::find($id);
        return view('tags.tag_edit', compact('tag'));
    }
    
    public function update(Request $request, $id)
    {
        // 特定のTodoを更新する
    }
    
    public function destroy(Tag $tag)
    {
        // 特定のTodoを削除する
    }
}
