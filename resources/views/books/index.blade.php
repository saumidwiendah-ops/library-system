@extends('layouts.app')

@section('title', 'Books')

@section('content')

    <h2>Daftar Buku</h2>

    @foreach($books as $book)
        <div>
            <h3>{{ $book->judul }}</h3>
            <p>Penulis: {{ $book->penulis }}</p>
            <p>Tahun Terbit: {{ $book->tahun_terbit }}</p>
            <p>Stok: {{ $book->stok }}</p>

            <a href="{{ url('/books/' . $book->id) }}">Detail Buku</a>

            <hr>
        </div>
    @endforeach

@endsection
