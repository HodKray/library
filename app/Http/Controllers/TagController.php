<?php

namespace App\Http\Controllers;

use App\Models\Reader;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function  listTag (){
        return view('tags.index',[
            'tags'=>Tag::all()
        ]);
    }
    public function  createViewTag (){
        return view('tags.create',[
            'tags'=>Tag::all()
        ]);
    }

    public function  createTag (Request $request){
       Tag::create([
            'title' => $request->title,
        ]);
       return redirect('tag/list');
    }
}
