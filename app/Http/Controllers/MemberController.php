<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            'Firmansyah Saputra',
            'Ahmad Budi',
            'Putri Anzani',
            'Dwi Endah Saumi',
            'Eka Pratama'
        ];

        return view('members.index', compact('members'));
    }
}