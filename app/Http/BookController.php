<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'  => 'required',
            'author' => 'required',
            'price'  => 'required|numeric',
            'stock'  => 'required|integer',
            'pdf'    => 'required|mimes:pdf|max:2048',
        ]);

        $path = $request->file('pdf')->store('books');

        Book::create([
            'title'     => $request->title,
            'author'    => $request->author,
            'price'     => $request->price,
            'stock'     => $request->stock,
            'pdf_path'  => $path,
        ]);

        return redirect()->route('books.index')->with('success', 'Book uploaded');
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'title'  => 'required',
            'author' => 'required',
            'price'  => 'required|numeric',
            'stock'  => 'required|integer',
        ]);

        if ($request->hasFile('pdf')) {
            Storage::delete($book->pdf_path);
            $data['pdf_path'] = $request->file('pdf')->store('books');
        }

        $book->update($data);
        return redirect()->route('books.index')->with('success', 'Book updated');
    }

    public function destroy(Book $book)
    {
        Storage::delete($book->pdf_path);
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted');
    }
}
