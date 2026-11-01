<h1>Edit Buku</h1>

<form action="/books/{{ $book->id }}" method="POST">
    @csrf
    @method('PUT')

    <label>Judul Buku</label><br>
    <input type="text" name="judul" value="{{ $book->judul }}"><br><br>

    <label>Penulis</label><br>
    <input type="text" name="penulis" value="{{ $book->penulis }}"><br><br>

    <label>Tahun Terbit</label><br>
    <input type="number" name="tahun_terbit" value="{{ $book->tahun_terbit }}"><br><br>

    <label>Stok</label><br>
    <input type="number" name="stok" value="{{ $book->stok }}"><br><br>

    <button type="submit">Update</button>
</form>

<a href="/books">Kembali</a>