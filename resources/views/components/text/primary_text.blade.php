@props([
'title',
'text' => "",
])

<div class="mt-4 p-2 w-full">
  <p>{{ $title }} @if(!$text) <span class="ml-1 text-red-300">【必須】</span> @endif</p>
</div>