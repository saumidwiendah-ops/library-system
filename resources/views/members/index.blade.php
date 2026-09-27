@extends('layouts.app')

@section('title', 'Members')

@section('content')

    <h2>Daftar Anggota</h2>

    <p>Sistem Informasi Perpustakaan</p>

    <ul>
        @foreach($members as $member)
            <li>{{ $member }}</li>
        @endforeach
    </ul>

@endsection