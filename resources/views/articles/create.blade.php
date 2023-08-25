<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>記事投稿</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
<x-app-layout>
    <header>
        <div class="py-6">
            <p class="text-black text-xl">記事投稿</p>
            
        </div>
    </header>
    
    <div class="min-w-full divide-y">
    <form action="" method="post" class="mt-10">
          @csrf
          @method('PUT')
          <div class="flex flex-col items-center">
              <label class="w-full max-w-3xl mx-auto">
                  <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-4 pl-4 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"type="text" name="todo[title]" value="{{ $todo->title }}" />
                  <textarea class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-4 pl-4 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"type="text" name="todo[body]" value="{{ $todo->body }}" ></textarea>
                  <textarea class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-4 pl-4 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"type="text" name="tag[name]" value="{{ $tag->name }}" ></textarea>
              </label>

              <div class="mt-8 w-full flex items-center justify-center gap-10">
                  <a href="/todos" class="block shrink-0 underline underline-offset-2">戻る</a>
                  <button type="submit">編集を保存</button>
              </div>
          </div>
    </form>
    <a href="{{ route('index_todo', $article->id) }}"><buttom type="submit">戻る</buttom></a>
</x-app-layout>
</body>
</html>






