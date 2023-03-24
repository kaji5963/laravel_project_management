@props([
'title',
'commonValue',
'text' => "",
'type' => "text",
'value',
])

<div class="p-2 w-full">
  <div class="relative">
    <label for={{ $commonValue }} class="leading-7 text-sm text-gray-600">{{ $title }}
      @if(!$text) <span class="ml-1 text-red-300">【必須】</span> @endif
    </label>
    <input type="{{ $type }}" id={{ $commonValue }} name={{ $commonValue }} value="{{ $value }}"
      class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
  </div>
</div>