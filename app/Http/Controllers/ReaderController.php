<?php

namespace App\Http\Controllers;

use App\Models\Book;

use App\Models\BookReader;
use App\Models\Reader;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    public function  list (){
        return view('readers.index',[
            'readers'=>Reader::all()
        ]);
    }
    public function JournalView (){
        $readers = Reader::with('books')->get();

        return view('ReadJournal.index',[
            'readers'=>$readers,

        ]);
    }
    public function  createView (){
        return view('readers.create',[
            'readers'=>Reader::all()
        ]);
    }

    public function  addToJournalView (){

        return view('ReadJournal.create',[
            'readers'=>Reader::all(),
            'books'=>Book::all(),

        ]);
    }


    public function  addToJournal (Request $request){

        $reader=Reader::find($request->reader_id);
        $reader->books()->attach($request->book_id,[
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date
        ]);

        return redirect('/readJournal/list');
    }


    public function createReaders(Request $request)
    {
        Reader::create([
            'fio' => $request->fio,
            'date_of_birth' => $request->date_of_birth,
        ]);


        return redirect('/readers/index');
    }

    public function ReaderDelete($id){
        Reader::find($id)->delete();
        return redirect('/reader/list');
    }
}
