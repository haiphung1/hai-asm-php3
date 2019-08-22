<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $products = $products->load('category');
        return view('product.list-product', compact('products'));
    }
    public function addProduct()
    {
        $category = Category::all();
        return view('product.add-product', compact('category'));
    }
    public function createProduct(ProductRequest $request)
    {
        $data = $request->except('_token');
        Product::create($data);
        return $this->index();
    }
    public function editProduct(Product $product)
    {
        $category = Category::all();
        return view('product.edit-product', ['product'=>$product], compact('category'));
    }
    public function deleteProduct(Product $product)
    {
        $product->delete();
        return $this->index();
    }
    public function updateProduct(ProductRequest $request)
    {
        $data = $request->except('_token', 'id');
        $product = Product::find($request->id);
        $product->update($data);
        return $this->index();
    }
    public function detailProduct(Product $product)
    {
        $product = $product->load('category');
        return view('product.detail-product', ['product'=>$product]);
    }
}
