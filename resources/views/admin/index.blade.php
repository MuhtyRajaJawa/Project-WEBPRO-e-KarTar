<h2>Daftar Admin</h2>
<a href="{{ route('admin.create') }}">Tambah Admin</a>
<table border="1">
  <tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Aksi</th>
  </tr>
  @foreach($admins as $a)
  <tr>
    <td>{{ $a->id }}</td>
    <td>{{ $a->nama }}</td>
    <td>{{ $a->email }}</td>
    <td>
      <a href="{{ route('admin.edit', $a->id) }}">Edit</a>
      <form action="{{ route('admin.destroy', $a->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Hapus</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>
