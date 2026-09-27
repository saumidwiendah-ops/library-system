<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $books = 8;
        $members = 5;
        $categories = 5;

        return view('dashboard.index', compact('books', 'members', 'categories'));
    }
}