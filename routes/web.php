<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\TagController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::resource('todos', TodoController::class);
    Route::get('/todos', [TodoController::class, 'index'])->name('index_todo');
    Route::post('/todos/{todo}', [TodoController::class, 'store']);
    Route::get('/todos/{todo}/edit', [TodoController::class, 'edit']);
    Route::put('/todos/{todo}/update', [TodoController::class, 'update']);
    Route::delete('/todos/{todo}', [TodoController::class, 'destroy']);
    
    // Todoの投稿関連ルート
    Route::get('/articles/index', [ArticleController::class, 'index'])->name('todo_posting_page');

    //タグの表示
    //Route::get('/todos/{tag}', [TodoController::class, 'index'])
    //Route::get('/tags/index', [TagController::class, 'index'])->name('tagging_page');
    Route::get('/tags/{tag}/edit', [TagController::class, 'edit']);
    Route::get('/tags/create', [TagController::class, 'create']);
    Route::post('/tags', [TagController::class, 'store']);
});

Route::get('/todos/create', [TodoController::class, 'create']);
Route::get('/todos/{todo}', [TodoController::class, 'show'])->name('show_todo');