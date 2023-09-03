<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\Todo;
use App\Models\Tag;

class ArticleController extends Controller
{
    public function index()
    {
        // 一覧を表示する
        $articles=Article::latest()->get();
        return view('articles.post', compact('articles'));
    }

    public function create($id)
    {
        // 作成するフォームを表示する
        $todo=Todo::find($id);
        return view('articles.create', compact('todo'));
    }
    
    public function store(Request $request)
    {
        // データベースに保存する
        $todo = $request['todo'];
        $todo['user_id'] = Auth::id();
        $tag_ids = $request->input('tag.id');
        // 新しいTodoとタグを作成してデータベースに保存
        $articles = Article::create($todo);
        
        // Todoとタグの関連付け
        foreach($tag_ids as $tag_id){
            $articles->tags()->attach($tag_id);
        }
        return redirect()->route('article.index');
    }
    
    public function show(Article $article)
    {
        // 詳細を表示する
    }
    
    public function edit($id)
    {
        // 編集フォームを表示する
    }
    
    public function update(Request $request, $id)
    {
        // 特定のTodoを更新する
    }
    
    public function destroy(Article $article)
    {
        // 特定のTodoを削除する
    }
    
}
