<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

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
        Book::create($request->all());
        return redirect('books')->with('success', 'Book created successfully.');
    }
    
    public function edit($id)
    {
        $book = book::findOrFail($id);
        return view('books.edit', compact('book'));
    }
    
    public function update(Request $request, $id)
    {
        $book = book::findOrFail($id);
        $book->update($request->all());
        return redirect('books')->with('success', 'book updated successfully.');
    }
    
    public function destroy($id)
    {
        $book = book::findOrFail($id);
        $book->delete();
        return redirect('books')->with('success', 'book deleted successfully.');
    }
}
