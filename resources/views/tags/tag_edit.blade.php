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
            <p class="text-xl">Tag編集</p>
        </div>
      </header>
      <main>
          <div>
            {{--@foreach($tags as $tag)--}}
            <form action="/tags/{{ $tag->id }}" method="post" class="mt-10">
              @csrf
              @method('PUT')
              <label class="w-full max-w-3xl mx-auto">
                  <input type="text" name="tag[name]" value="{{ $tag->name }}" />
              </label>
            </form>
          {{--@endforeach--}}
          </div>
          
          <form>
            <div>
                <a href="/todos" class="block shrink-0 underline underline-offset-2">戻る</a>
                <button type="submit">編集を保存</button>
            </div>
          </form>
      </main>
    </x-app-layout>
  </body>
</html>