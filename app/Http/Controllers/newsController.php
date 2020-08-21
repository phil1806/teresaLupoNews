<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class newsController extends Controller
{
    /**
    * type: function
    * nom: index
    * Desc: return la liste des news
    */
    public function index(){

        // je charge la liste des news via le model 
        $news = News::orderBy('id','desc')->take(4)->get();
        $i = 0;
        return view('news.index',compact('news','i'));   
    }

    public function show(int $id){
        
        // je charge la liste des news via le model 
        $new = News::find($id);
        return view('news.show', compact('new'));
    }

}
