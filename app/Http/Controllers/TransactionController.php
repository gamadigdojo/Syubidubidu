<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use App\Models\Transaction;
use App\Models\TransactionDetails;


class TransactionController extends Controller
{
    public function getTransactionPage(){
        // get the user and all his cart items from cart table (based on user email)
        $user = auth()->user();
        $cartItems = Cart::where('email', $user->email)->get();
        return view('transaction', compact('user', 'cartItems'));
    }
}
