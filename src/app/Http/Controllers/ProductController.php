<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
{
    $products = \App\Models\Product::all();
    return view('products.index', compact('products'));
}

public function create()
{
    return view('products.create');
}

public function store(Request $request)
{
    \App\Models\Product::create($request->all());
    return redirect('/products');
}

public function edit($id)
{
    $product = \App\Models\Product::findOrFail($id);
    return view('products.edit', compact('product'));
}

public function update(Request $request, $id)
{
    $product = \App\Models\Product::findOrFail($id);
    $product->update($request->all());

    return redirect('/products');
}

public function destroy($id)
{
    $product = \App\Models\Product::findOrFail($id);
    $product->delete();

    return redirect('/products');
}

}
