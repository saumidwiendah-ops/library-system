@extends('layouts.app')

@section('title', 'Categories')

@section('content')

    <h2>Daftar Kategori</h2>

    @foreach($categories as $category)
        <p>{{ $category->nama }}</p>
    @endforeach

@endsection