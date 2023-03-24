<div class="ml-2 flex">
  @foreach ($items as $item)
  <div class="mr-4">
    <input id="{{ $text }} {{ $item->id }}" type="checkbox" name="{{ $name }}[]" value="{{ $item->name }}"
      @if($errors->first( $name )){{is_array(old( $name )) &&
    array_keys(old( $name , $item->name)) ? 'checked="checked"' : ""}}
    @else{{in_array($item->name, old( $name , $project , true)) ? 'checked="checked"' : ""}}
    @endif />
    <label for="{{ $text }} {{ $item->id }}">{{ $item->name }}</label>
  </div>
  @endforeach
</div>