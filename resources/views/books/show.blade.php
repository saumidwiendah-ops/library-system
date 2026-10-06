@extends('layouts.app')

@section('content')

    <h2>Detail Buku</h2>

    <p>ID Buku: {{ $book->id }}</p>
    <p>Judul: {{ $book->judul }}</p>
    <p>Penulis: {{ $book->penulis }}</p>
    <p>Tahun Terbit: {{ $book->tahun_terbit }}</p>
    <p>Stok: {{ $book->stok }}</p>

    @if($book->stok > 0)
        <p>Buku tersedia.</p>
    @else
        <p>Buku sedang habis.</p>
    @endif

@endsection

