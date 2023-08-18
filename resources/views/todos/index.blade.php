<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Todo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
    <x-app-layout>

        <header>
                <div class="py-6">
                    <p class="text-black text-xl">Todoアプリ</p>
                </div>
        </header>

        <div class="min-w-full divide-y">
        <form action="/todos" method="POST">
            @csrf
            @method('POST')
            <div class="title"><input type="text" name="todo[title]" placeholder="タイトル"/></div>
            <div class="body"><textarea type="text" name="todo[body]" placeholder="Todoを入力・・・"></textarea><button><input type="submit" value="作成"/></button></div>
        </form>
        </div>
        
        @if ($todos->isNotEmpty())
          <div class="max-w-7xl mx-auto mt-20">
              <div class="inline-block min-w-full py-2 align-middle">
                  <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                      <table class="min-w-full divide-gray-300">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900">
                                タスク</th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach ($todos as $item)
                            <tr>
                                  <tr>
                                      <td class="px-3 text-gray-500">
                                          <div>
                                              {{ $item->title }}
                                          </div>
                                      </td>
                                      <td class="px-3 text-gray-500">
                                          <div>
                                            {{ $item->body }}
                                          </div>
                                      </td>

                                      <td>
                                          <div class="flex justify-end">
                                              <div>
                                                  <form action="/todos/{{ $item->id }}"method="post"class="inline-block text-gray-500 font-medium"role="menuitem" tabindex="-1">
                                                      @csrf
                                                      @method('PUT')
                                                        <input type="hidden" name="status" value="{{$item->status}}"><button type="submit"class="py-4 w-20">完了</button>
                                                  </form>
                                              </div>
                                              <div class="edit">
                                                  <a href="/todos/{{ $item->id }}/edit/"class="inline-block text-center py-4 w-20 underline underline-offset-2 text-sky-600 md:hover:bg-sky-100 transition-colors">編集</a>
                                              </div>
                                              <div>
                                                  <form action="/todos/{{ $item->id}}" method="post"class="inline-block text-gray-500 font-medium"role="menuitem" tabindex="-1">
                                                      @csrf
                                                      @method('DELETE')
                                                      <button type="submit"class="py-4 w-20 md:hover:bg-slate-200 transition-colors">削除</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
        @endif
        <form　action=/articles method="post">
            @csrf
            @method('PUT')
            <buttom type="submit">投稿</buttom>
        </form>
    </x-app-layout>
    </body>
</html>