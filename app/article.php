<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $fillable = [
        'article_title', 'article_body', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getAllArticle(){

        $article=article::all();

       return $article;

    }

    public function getMyArticle(){

        $article=article::where('user_id',1)->get();

        return $article;

    }

    public function createNewArticle($data){

        return article::create([
            'article_title' => $data['article_title'],
            'article_body' => $data['article_body'],
            'user_id' => auth()->user()->id
        ]);
    }


}