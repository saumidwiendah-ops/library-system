@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <h2>Library System Dashboard</h2>

    <p>Selamat datang di Sistem Informasi Perpustakaan.</p>

    <ul>
        <li>Jumlah Buku: {{ $books }}</li>
        <li>Jumlah Member: {{ $members }}</li>
        <li>Jumlah Kategori: {{ $categories }}</li>
    </ul>

@endsection