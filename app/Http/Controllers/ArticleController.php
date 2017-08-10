<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Article\Article;
use Domain\SubCategory\SubCategory;

class ArticleController extends Controller
{

    public function __construct(Article $article, SubCategory $subCategories)
    {
        $this->subCategories = $subCategories;

        $this->article = $article;
    }

    public function index()
    {
        $articles = $this->article->getListagem();

        return view('admin.article.index', compact('articles'));
    }

    public function create()
    {
        $subcategories = $this->subCategories->pluck('name', 'id');

        $relevance = ['1','2','3','4','5'];

        return view('admin.article.create', compact('subcategories', 'relevance'));
    }

    public function store(Request $request)
    {

      $request['user_id']  = auth()->user()->id;

      $this->article->create($request->all());

      return redirect()->route('article.index');

    }

    public function edit($id)
    {

      $article =$this->article->find($id);

      $subcategories = $this->subCategories->pluck('name', 'id');

      $relevance = ['1','2','3','4','5'];

      return view('admin.article.edit', compact('article'), compact('subcategories', 'relevance'));

    }

    public function update($id, Request $request)
    {
        $article = $this->article->find($id);

        $article->update($request->all());

        return redirect()->route('article.index');

    }

    public function destroy($id)
    {

    	$article = $this->article->find($id);

    	$article->delete($id);

    	return redirect()->route('article.index');

    }




}
