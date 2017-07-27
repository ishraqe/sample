<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use App\User;
use Session;
use Illuminate\Http\Response;
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
    public function singleArticle($id)
    {
        $article=new article();

        $SingleArticle=$article->getMyArticleById($id);

       

        return view('single')->with([
            'SingleArticle' => $SingleArticle
        ]);
    }

    public function singleArticleEdit($id)
    {
       $article=new article();

        $SingleArticle=$article->getMyArticleById($id);

         return view('edit')->with([
            'SingleArticle' => $SingleArticle
        ]);
    }

     public function singleArticleMakeEdit(Request $request,$id)
    {
        $input=$request->all();
 
        
       $article=new article();

        $SingleArticle=$article->getMyArticleById($id);

        

        $SingleArticle->article_title=$input['article_title'];
        $SingleArticle->article_body=$input['article_body'];

        $SingleArticle->save();

        return redirect('/home' );
    }

     public function singleArticleDelete($id)
    {
         
        
       $article=new article();

        $SingleArticle=$article->getMyArticleById($id);


        $SingleArticle->delete();

        return redirect('/home');
    }
}
