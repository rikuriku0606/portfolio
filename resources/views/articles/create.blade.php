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
    
    @if ($todos->isNotEmpty())
    <div class="min-w-full divide-y">
        @foreach ($todos as $item)
                <div class='todo'>
                    <h2 class='title'>{{ $item->title }}</h2>
                    <p class='body'>{{ $item->body }}</p>
                    <br>
            @endforeach
    </div>
    @endif
</x-app-layout>
</body>
</html>






