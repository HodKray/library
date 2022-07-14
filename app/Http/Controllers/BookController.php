<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Reader;
use App\Models\Shelf;
use App\Models\Tag;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function viewCreate()
    {
        return view('books.create', [
            'categories' => Category::all(),
            'shelves' => Shelf::all(),
            'authors' => Author::all(),
            'tags' => Tag::all(),
        ]);
    }
    public function list()
    {
        $books = Book::with('authors')->get();
        return view('books.index', [
            'books' => $books,
        ]);
    }

    public function viewUpdate($id)
    {
        return view('books.edit', [
            'books' => Book::find($id),
            'categories' => Category::all(),
            'shelves' => Shelf::all(),
            'authors' => Author::all(),
            'tags' => Tag::all(),
        ]);
    }
    public function createBook(Request $request)
    {

        $file = $request->file('photo')->getClientOriginalName();
        $book = Book::create([
            'title' => $request->title,
            'shelf_id' => $request->shelf_id,
            'photo' => $file,
            'category_id' => $request->category_id,
        ]);
        $request->file('photo')->move(public_path('img'), $file);



        $book->authors()->attach($request->author_ids);
        $book->tags()->attach($request->tag_ids);



        return redirect('/books/list');
    }
    public function update(Request $request, $id){

        $file = $request->file('photo')->getClientOriginalName();
        $book = Book::find($id);
        $book->update([
            'title' => $request->title,
            'shelf_id' => $request->shelf_id,
            'count' => $request->count,
            'photo' => $file,
            'category_id' => $request->category_id,
        ]);
        $request->file('photo')->move(public_path('img'), $file);
        //rel
        $book->detachAllAuthors();
        $book->detachAllTags();
        //rel
        $book->authors()->attach($request->author_ids);
        $book->tags()->attach($request->tag_ids);
        return redirect('/books/list');
    }
    public function BookDelete($id){
       Book::find($id)->delete();
       return redirect('/books/list');
}
}
