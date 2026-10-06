<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Member;

class DashboardController extends Controller
{
    public function index()
    {
        $books = Book::count();
        $members = Member::count();
        $categories = Category::count();

        return view('dashboard.index', compact('books', 'members', 'categories'));
    }
}