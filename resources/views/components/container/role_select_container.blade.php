<form id="form" method="get" action="{{ route('users.index') }}">
  @csrf
  <select name="role" id="role" class="mr-8" onchange="submit(this.form)">
    <option value="全て" selected>全て</option>
    <option value="admin" {{ $role=="admin" ? 'selected' : "" }}>admin</option>
    <option value="user" {{ $role=="user" ? 'selected' : "" }}>user</option>
  </select>
</form>