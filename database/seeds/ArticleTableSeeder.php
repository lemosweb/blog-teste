<?php

use Illuminate\Database\Seeder;
use Domain\Article\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(Article::class, 10)->create();
    }
}
