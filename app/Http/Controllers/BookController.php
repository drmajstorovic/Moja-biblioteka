<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class BookController extends Controller
{
    public function save_book(Request $request){
        $incomingFields = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'genre' => 'required',
            'isbn' => ['bail', 'required', 'unique:books', 'digits:13']
        ]);
        
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['author'] = strip_tags($incomingFields['author']);
        $incomingFields['genre'] = strip_tags($incomingFields['genre']);
        $incomingFields['isbn'] = strip_tags($incomingFields['isbn']);

        Book::create($incomingFields);
        return back()->with('success', 'Uspješno ste dodali novu knjigu u sistem');
    }
}
