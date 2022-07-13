<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use App\Models\Shelf;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function viewCreate()
    {
        return view('books.create', [
            'categories' => Category::all(),
            'shelves' => Shelf::all(),
        ]);
    }

    public function list()
    {
        $books = Book::paginate(4);
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
        ]);
    }

    public function createBook(Request $request)
    {
        $file = $request->file('photo')->getClientOriginalName();
        Book::create([
            'title' => $request->title,
            'shelf_id' => $request->shelf_id,
            'count' => $request->count,
            'photo' => $file,
            'category_id' => $request->category_id,
        ]);
        $request->file('photo')->move(public_path('img'), $file);
        return redirect('/books/list');
    }

    public function update(Request $request, $id){
        $file = $request->file('photo')->getClientOriginalName();
        Book::find($id)->update([
            'title' => $request->title,
            'shelf_id' => $request->shelf_id,
            'count' => $request->count,
            'photo' => $file,
            'category_id' => $request->category_id,
        ]);
        $request->file('photo')->move(public_path('img'), $file);
        return redirect('/books/list');

    }

    public function BookDelete($id){
       Book::find($id)->delete();
       return redirect('/books/list');
}
}
