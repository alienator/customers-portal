<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class ProductController extends Controller
{
    public function validateAttributes() {
	return request()->validate([
	    'sku' => 'required',
	    'name' => 'required',
	    'description' => 'required',
	    'buy_price' => 'required',
	    'sell_price' => 'required',
	    'stock' => 'required',
	    'picture' => ''
	]);
    }
    
    public function store() {
	$validAttributes = $this->validateAttributes();
	Product::create($validAttributes);

	return redirect('/products');
    }

    public function update(Product $product) {
	$validAttributes = $this->validateAttributes();
	$product->update($validAttributes);

	$product->save();

	return redirect('/products/' . $product->sku);
    }

    public function delete(Product $product) {
	$product->delete();

	return redirect('/products/');
    }

    public function get(Product $product) {
	return view('products.get', compact($product));
    }

    public function index() {
	$products = Product::all();

	return view('products.index', compact($products));
    }
}
