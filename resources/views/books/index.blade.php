<h1>Daftar Buku</h1>

@if (session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
@endif

<a href="/books/create">+ Tambah Buku</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun Terbit</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    @foreach ($books as $book)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $book->judul }}</td>
        <td>{{ $book->penulis }}</td>
        <td>{{ $book->tahun_terbit }}</td>
        <td>{{ $book->stok }}</td>
        <td>
            <a href="/books/{{ $book->id }}">Detail</a> |
            <a href="/books/{{ $book->id }}/edit">Edit</a> |

            <form action="/books/{{ $book->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin ingin menghapus buku ini?')">
                    Hapus
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>