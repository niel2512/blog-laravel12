  <x-layout :title="$title">
    {{-- dd untuk debugging array--}}
    {{-- @dd($posts)  --}}
    {{-- Disini bakalan mengisi $slot di layout --}}
    @foreach ($posts as $post)
    {{-- Looping untuk mengambil data array di route --}}
    <article class="py-9 max-w-screen-md border-b border-gray-300">
      <a href="/posts/{{ $post['id'] }}">
      <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 hover:underline">{{ $post['title'] }}</h2></a>
      <div class="text-base text-gray-500">
        <a href="#">{{ $post['author'] }}</a> | 14 May 2025
      </div>
      {{-- Menggunakan helper string limit 10 karakter--}}
      <p class="my-4 font-light">{{ Str::limit($post['body']),10 }}</p>
      <a href="/posts/{{ $post['id'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
      </article>
      @endforeach
  </x-layout>