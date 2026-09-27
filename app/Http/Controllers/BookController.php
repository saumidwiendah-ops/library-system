<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            [
                'judul' => 'Pemrograman PHP',
                'penulis' => 'Firmansyah Saputra',
                'tahun' => 2022
            ],
            [
                'judul' => 'Laravel untuk Pemula',
                'penulis' => 'Ahmad Budi',
                'tahun' => 2023
            ],
            [
                'judul' => 'Basis Data',
                'penulis' => 'Putri Anzani',
                'tahun' => 2021
            ],
            [
                'judul' => 'Algoritma dan Pemrograman',
                'penulis' => 'Dwi Endah Saumi',
                'tahun' => 2020
            ],
            [
                'judul' => 'Pemrograman Berorientasi Objek',
                'penulis' => 'Eka Pratama',
                'tahun' => 2024
            ],
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $stock = 7;

        return view('books.show', compact('id', 'stock'));
    }
}