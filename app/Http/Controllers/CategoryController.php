<?php

namespace App\Http\Controllers;

use Domain\Category\Category;
use App\Http\Requests\FormCategoryRequest;


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

    public function store(FormCategoryRequest $request)
    {        

    	$categorysaved = $this->categories->create($request->all());

    	return redirect()->route('categories.index');
    }

    public function edit($id)
    {

    	$category = $this->categories->find($id);

    	return view('admin.categories.edit', compact('category'));

    }

    public function update($id, FormCategoryRequest $request)
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
