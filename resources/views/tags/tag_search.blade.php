<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
  </head>
  
  <body >
    <x-app-layout>
    
      <header class="bg-slate-800">
        <div class="py-6">
            <p class="text-xl">Tag検索</p>
        </div>
      </header>
      <main>
          <div>
            @foreach($tag_search_result as $tag)
                <p>{{ $tag->name }}</p>
                <ul>
                    @foreach($tag->todos as $todo)
                        <li>{{ $todo->title }}</li>
                    @endforeach
                </ul>
            @endforeach
          </div>
          
          <form>
            <div>
                <a href="/todos" class="block shrink-0 underline underline-offset-2">戻る</a>
            </div>
          </form>
      </main>
    </x-app-layout>
  </body>
</html>