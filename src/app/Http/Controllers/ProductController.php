<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
public function publicIndex()
{
    $products = \App\Models\Product::all();
    return view('shop.index', compact('products'));
}
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


public function cart()
{
    $cart = session()->get('cart', []);
    return view('shop.cart', compact('cart'));
}

public function addToCart($id)
{
    $product = \App\Models\Product::findOrFail($id);

    $cart = session()->get('cart', []);

    if(isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = [
            "name" => $product->name,
            "price" => $product->price,
            "quantity" => 1
        ];
    }

    session()->put('cart', $cart);

    return redirect()->back();
}

public function removeFromCart($id)
{
    $cart = session()->get('cart', []);

    if(isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);
    }

    return redirect()->back();
}

}
