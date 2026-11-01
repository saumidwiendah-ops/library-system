<h1>Tambah Buku</h1>

<form action="/books" method="POST">
    @csrf

    <label>Judul Buku</label><br>
    <input type="text" name="judul"><br><br>

    <label>Penulis</label><br>
    <input type="text" name="penulis"><br><br>

    <label>Tahun Terbit</label><br>
    <input type="number" name="tahun_terbit"><br><br>

    <label>Stok</label><br>
    <input type="number" name="stok"><br><br>

    <button type="submit">Simpan</button>
</form>

<a href="/books">Kembali</a>