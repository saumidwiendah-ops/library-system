@extends('layouts.app')

@section('title', 'Book Detail')

@section('content')

    <h2>Detail Buku</h2>

    <p>ID Buku: {{ $id }}</p>

    @if($stock > 0)
        <p>Buku tersedia. Stok: {{ $stock }}</p>
    @else
        <p>Buku sedang habis.</p>
    @endif

@endsection