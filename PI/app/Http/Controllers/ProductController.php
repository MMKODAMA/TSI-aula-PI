<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
    public function index(){
        return view('product.index')->with('products',Product::all());
    }

    public function create(){
        return view('product.create')->with('categories',Category::all());
    }
    public function store(Request $request){
        Product::create($request->all());
        session()->flash('success','Produto Criado com Sucesso!');
        return redirect(route('product.index'));
    }
    public function destroy(Product $product){
        $product->delete();
        session()->flash('success','Produto Apagado com Sucesso!');
        return redirect(route('product.index'));
    }
    public function edit(Product $product){
        return view('product.edit')->with(['product'=>$product,'categories' => Category::all()]);
    }
    public function update(Product $product, Request $request){
        $product->update($request->all());
        session()->flash('success','Produto Editado com Sucesso!');
        return redirect(route('product.index'));
    }
    public function trash(){
        return view('product.trash')->with('products',Product::onlyTrashed()->get());
    }
}
