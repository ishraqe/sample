<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use App\User;
use Session;
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
    public function createArticle(Request $request){
        $this->validate($request,[
            'article_title' =>'required',
            'article_body' =>'required'
        ]);

        $data=$request->all();

        $article=new article();
        $createArricle=$article->createNewArticle($data);
        if ($createArricle){

            Session::flash('added_confirmation', 'Your article has been added!');

            return redirect()->back();
        }

    }
}
