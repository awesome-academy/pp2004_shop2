<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product.index', compact('products'));
    }
    public function create(){
        return view('product.create');
    }
    public function store(Request $request){
        $slug = uniqid();
        $product = new Product(array(
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'image' => $request->get('image'),
            'content' => $request->get('content'),
        ));
        $product->save();
        return redirect('/product/create')->with('status','Your product has been create! Code slug is : '.$slug);
    }
    public function show($id){
        $product = Product::whereId($id)->firstOrFail();
        return view ('product.show', compact('product'));
    }
    public function edit($id){
        $product = Product::whereId($id)->firstOrFail();
        return view ('product.edit', compact('product'));
    }
    public function update(Request $request,$id){
        $product = Product::whereId($id)->firstOrFail();
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->image = $request->get('image');
        $product->content = $request->get('content');
        $product->save();
        return redirect(action('ProductController@edit', $product->id ))->with('status','The product'.$id.'has been update');
    }
    public function destroy($id,$slug){
        $product = Product::whereId($id)->firstOrFail();
        $product->delete();
        return redirect(action('ProductController@show', $product->id))->with('status','The product'.$slug. 'has been delete')
    }
}
