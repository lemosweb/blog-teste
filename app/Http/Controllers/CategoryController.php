<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

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

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {   	

    	$categorysaved = $this->categories->create($request->all());

    	return redirect()->route('categories.index');
    }

    public function edit($id)
    {    	

    	$category = $this->categories->find($id);    	

    	return view('admin.categories.edit', compact('category'));

    }

    public function update($id, Request $request)
    {

		$category = $this->categories->find($id);


		$updated = $category->update(['name' => $request->name]);


		return redirect()->route('categories.index');

    }

    public function destroy($id)
    {

    	$category = $this->categories->find($id);
    	
    	$category->delete($id);
    	
    	return redirect()->route('categories.index');

    }
}
