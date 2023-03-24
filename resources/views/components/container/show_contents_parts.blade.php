<div class="border-2 rounded-md shadow-md w-2/3 mx-auto p-3 my-8 bg-gray-50">
  <h3>{{ $title }}</h3>
  <div class="flex">
    @if ($items)
    @foreach ($items as $item)
    <h4 class="mx-4 mt-4">{{ $item }}</h4>
    @endforeach
    @else <h4 class="mx-4 mt-4">未選択</h4>
    @endif
  </div>
</div>