<?php

namespace App\BO;


use App\Article;
use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 11/06/17
 * Time: 13:29
 */
class ArticleBO
{
    private $article;

    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    public function getListagem()
    {
        return $this->article->all();
    }
}