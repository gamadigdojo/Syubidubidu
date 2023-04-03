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

    public function checkout(Request $request){
        // get the user and all his cart items from cart table (based on user email)
        $user = auth()->user();
        $cartItems = Cart::where('email', $user->email)->get();

        // create OrderID {format TO[0-9][0-9][0-9] and unique}
        $OrderID = 'TO'.rand(100, 999)->unique();
        // create a new transaction
        $transaction = Transaction::create([
            
            'OrderID' => $OrderID,
            'Email' =>  $user->email,
            'PaymentMethodID' => $request->PaymentMethodID,
            'ShipmentTypeID' => $request->ShipmentTypeID,
            'OrderDate'=> now(),
            'OderDestination'=> $request->OderDestination,
        ]);

        // create a new transaction details for each cart item
        foreach ($cartItems as $cartItem) {
            TransactionDetails::create([
                'OrderID' => $OrderID,
                'ProductID' => $cartItem->ProductID,
                'Quantity' => $cartItem->Quantity,
            ]);
        }

        // delete all the cart items
        Cart::where('email', $user->email)->delete();

        return redirect()->route('transaction')->with('success', 'Transaction successful');
    }
}
