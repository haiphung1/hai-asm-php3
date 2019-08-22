<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
       $category = Category::all();
       $category = $category->load('childs');
       //dd($category->toArray());
        return view('category.list-cate', compact('category'));
    }
    public function formAdd()
    {
        $category = Category::all();
        return view('category.cate-add', compact('category'));
    }
    public function createAdd(CategoryRequest $request)
    {
        $data = $request->except('_token');
        Category::create($data);
        return $this->index();
    }
    public function editCate(Category $cate)
    {
        $category = Category::all();
        //dd($cate->toArray());
        return view('category.cate-edit', ['cate'=> $cate], compact('category'));
    }
    public function updateCate(CategoryRequest $request)
    {
        $data = $request->except('_token', 'id');
        $cate = Category::find($request->id);
        $cate->update($data);
        return $this->index();
    }
    public function deleteCate(Category $cate)
    {
        $cate->delete();
        return $this->index();
    }
}
