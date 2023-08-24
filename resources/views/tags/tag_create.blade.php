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
            <p class="text-xl">Tag作成</p>
        </div>
      </header>
      <main>
          <div>
            {{--@foreach($tags as $tag)--}}
            <form action="/tags" method="post" class="mt-10">
              @csrf
              <label class="w-full max-w-3xl mx-auto">
                  <input type="text" name="tag[name]" placeholder="タグ"/>
              </label>
              <input type="submit" value="作成"/>
            </form>
          {{--@endforeach--}}
          </div>
        <div>
            <a href="/todos" class="block shrink-0 underline underline-offset-2">戻る</a>
        </div>
      </main>
    </x-app-layout>
  </body>
</html>