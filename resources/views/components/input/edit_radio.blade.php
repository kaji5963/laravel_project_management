<div class="ml-2 flex">
  @foreach ($statuses as $status)
  <div class="mr-4">
    <input type="radio" name="status" value="{{ $status->name }}" @if (old("status", $project)===$status->name
    ) checked @endif />
    <label>{{ $status->name }}</label>
  </div>
  @endforeach
</div>