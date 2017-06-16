<?php

namespace App\BO;

use App\Article;

/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 11/06/17
 * Time: 13:29
 */
class ArticleBO
{  
    public function getListagem()
    {       	
        return Article::all();
    }
}