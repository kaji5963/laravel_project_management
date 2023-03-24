@props([
'color',
'pass',
'params' => "",
])

<button
  class="ml-auto text-white bg-{{ $color }}-500 border-0 py-2 px-6 focus:outline-none hover:bg-{{ $color }}-600 rounded"><a
    href="{{ route($pass, $params) }}">{{ $slot }}</a></button>