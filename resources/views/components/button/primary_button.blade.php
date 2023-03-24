@props([
'type' => "",
'color',
])

<div class="mt-12 p-2 w-full">
  <button type="{{ $type }}"
    class="flex mx-auto text-white bg-{{ $color }}-500 border-0 py-2 px-8 focus:outline-none hover:bg-{{ $color }}-600 rounded text-lg">{{
    $slot }}</button>
</div>