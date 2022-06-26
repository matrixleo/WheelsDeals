@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
  @foreach($tags as $tag)
  <li class="flex items-center justify-center font-serif text-white rounded-xl px-3 mr-2 text-xs">
    <button class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      <a href="/?tag={{$tag}}" class="">{{$tag}}</a>
    </button>
  </li>
  @endforeach
</ul>