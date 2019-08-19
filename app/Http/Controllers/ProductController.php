<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;

class ProductController extends Controller
{
    public function create()
    {
        return view('layouts.products.create');
    }

    public function store(ProductRequest $request)
    {
        $product =new Product();
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->save();

        return redirect()->route('products.index');
    }

    public function index()
    {
        $products = $this->getProducts();
        return view('layouts.products.index', compact('products'));
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('layouts.products.edit', compact('product'));
    }

    public function update($id, ProductRequest $request)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->save();

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return back()->with('success', 'Xóa dữ liệu thành công');
    }

    private function getProducts()
    {
        return Product::all();
    }
}
