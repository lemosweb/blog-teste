<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Article\Article;
use Domain\SubCategory\SubCategory;

class ArticleController extends Controller
{

    private $article;

    public function __construct(Article $article, SubCategory $subCategories)
    {
        $this->article = $article;

        $this->subCategories = $subCategories;
    }

    public function index()
    {
        $articles = $this->article->getListagem();

        return view('admin.article.index', compact('articles'));
    }

    public function create()
    {
        $subcategories = $this->subCategories->pluck('name','id');

        $relevance = ['1','2','3','4','5'];

      return view('admin.article.create',compact('subcategories','relevance'));
    }

    public function store(Request $request)
    {

      $this->article->create($request->all());

      return redirect()->route('article.index');
    }


}
