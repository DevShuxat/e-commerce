<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\v1\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Ramsey\Collection\Collection;

class CategoryController extends Controller
{
    public function index()
    {
       $category =  Category::all();
       return $this->success('All category', $category);
    }




    public function store(StoreCategoryRequest $request)
    {
        //
    }


    public function show(Category $category)
    {
        return $this->response(new CategoryResource($category));
    }



    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }


    public function destroy(Category $category)
    {
        //
    }
}
