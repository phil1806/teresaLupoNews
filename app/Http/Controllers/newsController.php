<?php

namespace App\Http\Controllers;

use App\Models\News as MdlNews;
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
        $news = MdlNews::orderbY('id','desc')->take(4)->get();
        return view('pages.accueil ', compact('news'));
    }
}
