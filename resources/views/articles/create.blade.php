<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>todo投稿</title>
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
    <form action="/articles/store" method="post" class="mt-10">
        @csrf
        <div class="flex flex-col items-center">
            <label class="w-full max-w-3xl mx-auto">
                <input type="text" name="todo[title]" value="{{ $todo->title }}" />
                <input type="text" name="todo[body]" value="{{ $todo->body }}" />
                <input type="hidden" name="todo[todo_id]" value="{{ $todo->id }}" />
                @foreach($todo->tags as $tag)
                    <input type="text" name="tag[name][]" value="{{ $tag->name }}" />
                    <input type="hidden" name="tag[id][]" value="{{ $tag->id }}" />
                @endforeach
            </label>
    
            <div class="mt-8 w-full flex items-center justify-center gap-10">
                <button type="submit">todoリストを投稿する</button>
            </div>
        </div>
    </form>

    <a href="{{ route('index_todo') }}"><buttom type="submit">戻る</buttom></a>
</x-app-layout>
</body>
</html>






