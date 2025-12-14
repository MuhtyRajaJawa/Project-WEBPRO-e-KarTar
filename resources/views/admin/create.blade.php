<h2>Tambah Admin Baru</h2>

@if ($errors->any())
  <div style="color:red;">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('admin.store') }}" method="POST">
  @csrf
  <label>Nama:</label>
  <input type="text" name="nama" required><br><br>

  <label>Email:</label>
  <input type="email" name="email" required><br><br>

  <label>Password:</label>
  <input type="password" name="password" required><br><br>

  <button type="submit">Simpan</button>
</form>

<a href="{{ route('admin.index') }}">← Kembali</a>
