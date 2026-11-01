<h1>Tambah Buku</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/books" method="POST">
    @csrf

    <label>Judul Buku</label><br>
    <input type="text" name="judul" value="{{ old('judul') }}"><br><br>

    <label>Penulis</label><br>
    <input type="text" name="penulis" value="{{ old('penulis') }}"><br><br>

    <label>Tahun Terbit</label><br>
    <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit') }}"><br><br>

    <label>Stok</label><br>
    <input type="number" name="stok" value="{{ old('stok') }}"><br><br>

    <button type="submit">Simpan</button>
</form>

<a href="/books">Kembali</a>