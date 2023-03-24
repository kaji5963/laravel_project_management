@props([
'role',
'initValue' => "",
])

<div class="mr-4">
  <input type="radio" name="role" value="{{ $role }}" @if(old('role', $initValue)===$role ) checked @endif />
  <label>{{ $role }}</label>
</div>