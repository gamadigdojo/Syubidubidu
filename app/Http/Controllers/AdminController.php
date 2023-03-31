<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $products = Product::all();

        return view('adminPanel', compact('products'));
    }

    public function getAddItem(){
        return view('addItem');
    }

    public function addItem(ProductRequest $request){

        $extension = $request -> file('ProductImage')->getClientOriginalExtension();
        $filename = $request->ProductName.'.'.$extension;
        $request->file('ProductImage')->storeAs('/public/products/', $filename);

        Product::create([
            'ProductID' => $request -> ProductID,
            'ProductName' => $request -> ProductName,
            'ProductPrice' => $request -> ProductPrice,
            'ProductCategory' => $request -> ProductCategory,
            'ProductDescription' => $request -> ProductDescription,
            'ProductImage' => $request -> ProductImage,
            'ProductStock' => $request -> ProductStock,
            'StoreID' => $request -> StoreID,
            'ProductImage' => $filename
        ]);

        return redirect(route('adminPanel'));
    }
    
    public function getUpdateItem($ProductID){
        $product = Product::where('ProductID', $ProductID)->firstOrFail();

        return view('updateItem', compact('product'));
    }

    public function updateItem(ProductRequest $request, $ProductID){
        $product = Product::where('ProductID', $ProductID)->firstOrFail();

        $product->update([
            'ProductDescription' => $request->ProductDescription,
            'ProductStock' => $request->ProductStock
        ]);

        return redirect(route('adminPanel'));
    }

    public function deleteItem($ProductID){
        $product = Product::where('ProductID', $ProductID)->firstOrFail();

        $product->delete();

        return redirect(route('adminPanel'));
    }
}
