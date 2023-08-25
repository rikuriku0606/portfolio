<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Todo;

class ArticleController extends Controller
{
    public function index(Article $article)
    {
        // 一覧を表示する
        $articles = Article::all(); // 例として Todo モデルからデータを取得する
        return view('articles.create')->with('articles', $articles);
    }

    public function create($id)
    {
        // 新しいTodoを作成するフォームを表示する
        $todo=Todo::find($id);
        return view('articles.create', compact('todo'));
    }
    
    public function store(Request $request, Article $article)
    {
        // 新しいTodoをデータベースに保存する
    }
    
    public function show(Article $article)
    {
        // 特定のTodoの詳細を表示する
    }
    
    public function edit($id)
    {
        // 特定のTodoの編集フォームを表示する
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
