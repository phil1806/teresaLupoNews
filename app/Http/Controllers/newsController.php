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

        // je fais appel au model
        $news = News::orderBy('id','desc')->take(4)->get();
        $i = 0;
        return view('news.index',compact('news','i'));
        
    }
}
