<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function home()
    {
        $article=new article();

        $myArticle=$article->getMyArticle();
        foreach ($myArticle as $m){
            dd($m);
        }
        return view('home')->with([
            'myArticle' => $myArticle
        ]);
    }

    public function index(){
        $article=new article();


       return view ("welcome")->with([
           'article' => $article->getAllArticle()
       ]);
    }
    public function createArticle(){

    }
}
