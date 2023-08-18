<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='articles'>
            @foreach ($articles as $article)
                <div class='article'>
                    <h2 class='title'>{{ $article->title }}</h2>
                    <p class='body'>{{ $article->body }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>