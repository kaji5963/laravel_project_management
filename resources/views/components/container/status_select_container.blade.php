<form id="form" method="get" action="{{ route('projects.index') }}">
  @csrf
  <select name="status" id="status" class="mr-8" onchange="submit(this.form)">
    <option value="全て" selected>全て</option>
    @foreach ($statuses as $status)
    <option value="{{ $status->name }}" {{ $select==$status->name ? 'selected' : "" }}>
      {{ $status->name }}</option>
    @endforeach
  </select>
</form>