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
        // show all the products in the cart based on the user email
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
        Cart::create([
            // 'ProductID' => $request->ProductID,
            'ProductID' => $request->ProductID,
            'Quantity' => 1,
            'Email' => $request->Email,
        ]);

        // redirect to inventory page
        return redirect()->route('inventory')->with('success', 'Product added to cart');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
