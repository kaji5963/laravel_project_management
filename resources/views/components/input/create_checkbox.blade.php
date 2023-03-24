<div class="ml-2 flex">
  @foreach ($items as $item)
  <div class="mr-4">
    <input id="{{ $text }} {{ $item->id }}" type="checkbox" name="{{ $name }}[]" value="{{ $item->name }}"
      @if(is_array(old( $name )) && in_array("$item->name", old( $name ), true) ) checked
    @endif />
    <label for="{{ $text }} {{ $item->id }}">{{ $item->name }}</label>
  </div>
  @endforeach
</div>