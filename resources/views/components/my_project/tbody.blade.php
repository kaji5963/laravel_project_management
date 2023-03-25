@foreach ($projects as $project)
@if (in_array($name, $project->assignees))
<tbody>
  <tr>
    <td class="border-t-2 px-4 py-3">{{ $project->name }}</td>
    <td class="border-t-2 px-4 py-3">{{ $project->status }}</td>
    <td class="border-t-2 px-4 py-3">{{ $project->created_at }}</td>
    <td class="border-t-2 px-4 py-3">{{ $project->updated_at }}</td>
    <td class="border-t-2 px-4 py-3"><a href="{{ route('projects.show', ['id' => $project->id]) }}"
        class="text-blue-500">詳細</a>
    </td>
  </tr>
</tbody>
@endif
@endforeach