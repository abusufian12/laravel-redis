<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Events\BookCreated;
use App\Events\BookUpdated;
use App\Events\BookDeleted;

class BookController extends Controller
{
 
    public function index(){

        $books = Book::get();

        $all_book = json_decode(Redis::get('all_book'), true);
        // dd(app());
        if (!empty($all_book)) {
            $books = (object)$all_book;
        }
        
        // dd($all_book);
        // foreach ($all_book as $key => $value) {
        //     dd($value);
        // }

        // dd($books);
        return view("books.index",compact('books'));
    }

    public function create(){
        return view('books.create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'book_name' => 'required',
            'writer' => 'required',
        ]);
        
        Book::create($request->all());

        event(new BookCreated());
        
        return redirect()->route('books.index')
                        ->with('success','Book created successfully.');
    }

    public function show(Book $book)
    {
        return view('books.show',compact('book'));
    }

    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'book_name' => 'required',
            'writer' => 'required',
        ]);
    
        $book->update($request->all());
        
        event(new BookCreated(Book::get()));

        return redirect()->route('books.index')
                        ->with('success','Book updated successfully');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        
        event(new BookCreated(Book::get()));
        
        return redirect()->route('books.index')
                        ->with('success','Book deleted successfully');
    }
}
