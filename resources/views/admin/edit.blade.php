<h2>Edit Data Admin</h2>

@if ($errors->any())
  <div style="color:red;">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('admin.update', $admin->id) }}" method="POST">
  @csrf
  @method('PUT')

  <label>Nama:</label>
  <input type="text" name="nama" value="{{ $admin->nama }}" required><br><br>

  <label>Email:</label>
  <input type="email" name="email" value="{{ $admin->email }}" required><br><br>

  <label>Password (kosongkan jika tidak diubah):</label>
  <input type="password" name="password"><br><br>

  <button type="submit">Update</button>
</form>

<a href="{{ route('admin.index') }}">← Kembali</a>
