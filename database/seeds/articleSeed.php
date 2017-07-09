<?php

use Illuminate\Database\Seeder;

class articleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article = new \App\article([


            'article_title' => 'My first title',
            'article_body' => 'Lorem ipsum dollor',
            'user_id'=> 1

        ]);
        $article->save();
    }
}
