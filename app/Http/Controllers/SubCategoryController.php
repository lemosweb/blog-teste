<?php

namespace App\Http\Controllers;

use Domain\SubCategory\SubCategory;
use Domain\Category\Category;
use App\Http\Requests\FormSubCategoryRequest;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    private $subcategory;
    private $categories;

    public function __construct(SubCategory $subcategory, Category $categories)
    {
        $this->subcategory = $subcategory;
        $this->categories = $categories;
    }

    public function index()
    {

        $subcategories = $this->subcategory->getListagem();

        return view('admin.subcategories.index', compact('subcategories'));
    }

      public function create()
    {

        $categories = $this->categories->pluck( 'name', 'id');

        return view('admin.subcategories.create', compact('categories'));
    }

    public function store(FormSubCategoryRequest $request)
    {

        $this->subcategory->create($request->all());


        return redirect()->route('subcategories.index');
    }

    public function edit($id)
    {

        $categories = $this->categories->pluck('name', 'id');

        $subcategory = $this->subcategory->find($id);

        return view('admin.subcategories.edit', compact('subcategory','categories'));

    }

    public function update($id, FormSubCategoryRequest $request)
    {        

        $subcategory = $this->subcategory->find($id);

        $subcategory->update($request->all());


        return redirect()->route('subcategories.index');

    }

    public function destroy($id)
    {

        $category = $this->subcategory->find($id);

        $category->delete($id);

        return redirect()->route('subcategories.index');

    }
}
