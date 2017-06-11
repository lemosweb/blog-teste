<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
	
	private $categories;
	
	public function __construct(Category $categories)
	{
		$this->categories = $categories;
	}
	
    public function index()
    {
    	   	
    	$categories = $this->categories->all();
    	
    	return view('admin.categories.index', compact('categories'));
    }
}
