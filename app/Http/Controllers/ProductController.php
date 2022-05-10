<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
	function index()
	{
	    return view('product', [
		'products' => Product::all()
		]);
	}
    public function store() {
	$product = new Product();
	$product->name = request('name');
	$product->price = request('price');
	$product->tax = request('tax');
	$product->stock = request('stock');
	request()->validate([
		'name' => ['required', 'alpha'],
		'price' => ['required', 'integer'],
		'tax' => ['required', 'integer'],
		'stock' => ['required', 'integer'],
	]);
	$product->save();
	
	return back();
    }
    
    public function delete($id) {
          $product = Product::where('id', $id)->firstorfail()->delete();
          return redirect()->route('product.index');
    }
}
