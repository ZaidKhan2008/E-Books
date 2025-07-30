<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // 📄 Show all books
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // 📝 Show create form
    public function create()
    {
        return view('books.create');
    }

    // 💾 Store new book
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_year' => 'required|integer|min:1500|max:' . date('Y'),
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Book added successfully!');
    }

    // ✏️ Show edit form
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    // 🔁 Update book
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_year' => 'required|integer|min:1500|max:' . date('Y'),
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Book updated successfully!');
    }

    // 🗑 Delete book
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully!');
    }
}