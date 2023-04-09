<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * show all the products in the cart
     */
    public function index()
    {
        $cart = Cart::where('Email', auth()->user()->email)->get();
        return view('cart', compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // check if the product is already in the cart
        $cart = Cart::where('Email', auth()->user()->email)->where('ProductID', $request->ProductID)->first();
        if ($cart) {
            //
        }else{
            Cart::create([
                'ProductID' => $request->ProductID,
                'Quantity' => $request->Quantity,
                'Email' => auth()->user()->email,
            ]);
        }
        // redirect to inventory page
        return redirect()->route('inventory')->with('success', 'Product added to cart');
    }

    public function increaseQuantity(Request $request, $ProductID){
        //user cant increase quantity above the product stock
        $cart = Cart::where('ProductID', $ProductID)->first();
        $product = Product::where('ProductID', $ProductID)->first();
        if ($cart) {
            if ($cart->Quantity < $product->ProductStock) {
                $cart->Quantity += 1;
                $cart->save();
            }
        }

        return redirect()->back();
    }

    public function decreaseQuantity(Request $request, $ProductID){
        $cart = Cart::where('ProductID', $ProductID)->first();

        if ($cart) {
            $cart->Quantity -= 1;
            if ($cart->Quantity == 0) {
                $cart->delete();
            } else {
                $cart->save();
            }
        }

        return redirect()->back();
    }

    

    
   
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
