<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    
    private $article;
    
    public function __construct(Article $article)
    {
        $this->article = $article;
    }
    
    public function index()
    {
        
        $articles = $this->article->getListagem(); 
        
        return view('admin.article.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.article.create');
    }

    
}
