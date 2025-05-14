  <x-layout :title="$title">
      <article class="py-9 max-w-screen-md">
      <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 ">{{ $p['title'] }}</h2>
      <div class="text-base text-gray-500">
        <a href="#">{{ $p['author'] }}</a> | 14 May 2025
      </div>
      <p class="my-4 font-light">{{ $p['body']}}</p>
      <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to all posts.</a>
    </article>
  </x-layout>