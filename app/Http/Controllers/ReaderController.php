<?php

namespace App\Http\Controllers;

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


    public function createReaders(Request $request)
    {
        Reader::create([
            'fio' => $request->fio,
            'date_of_birth' => $request->date_of_birth,
        ]);
        return redirect('/readers/index');
    }
}
