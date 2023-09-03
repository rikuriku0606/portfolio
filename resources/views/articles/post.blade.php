<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>todo一覧</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
<x-app-layout>
    <header>
        <div class="py-6">
            <p class="text-black text-xl">todo一覧</p>
            
        </div>
    </header>
    {{--@if ($todos->isNotEmpty())--}}
    <div class="min-w-full divide-y">
        <div>
            <div>ユーザー：{{ Auth::user()->name }}</div>
            @foreach ($articles as $article)
            <div>
                <div>タイトル：{{ $article->title }}</div>
                <div>詳細：{{ $article->body }}</div>
                @foreach($article->tags as $tag)
                    <div>タグ：{{ $tag->name }}</div>
                @endforeach
            </div>
            <br>
            @endforeach
        </div>
    </div>
    {{--@endif--}}
    <a href="{{ route('index_todo') }}"><buttom type="submit">戻る</buttom></a>
</x-app-layout>
</body>
</html>