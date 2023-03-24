<tbody>
  @foreach ($users as $user)
  <tr>
    <td class="border-t-2 px-4 py-3">{{ $user->name }}</td>
    <td class="border-t-2 px-4 py-3">{{ $user->role }}</td>
    <td class="border-t-2 px-4 py-3">{{ $user->created_at }}</td>
    <td class="border-t-2 px-4 py-3">{{ $user->updated_at }}</td>
    <td class="border-t-2 px-4 py-3"><a href="{{ route('users.show', ['id' => $user->id]) }}"
        class="text-blue-500">詳細</a>
    </td>
  </tr>
  @endforeach
</tbody>