<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\PaymentMethod;
use App\Models\ShipmentType;


class TransactionController extends Controller
{
    public function getTransactionPage(){
        // get the user and all his cart items from cart table (based on user email)
        $user = auth()->user();
        $cartItems = Cart::where('email', $user->email)->get();
        $payments = PaymentMethod::all();
        $shipments = ShipmentType::all();
        return view('transaction', compact('user', 'cartItems', 'payments', 'shipments'));
    }

    public function checkout(Request $request){
        // get the user and all his cart items from cart table (based on user email)
        $user = auth()->user();
        $cartItems = Cart::where('email', $user->email)->get();

        // create OrderID {format TO[0-9][0-9][0-9] and unique}
        $OrderID = 'TO' . str_pad(mt_rand(0, 999), 3, '0', STR_PAD_LEFT);
        // create a new transaction
        $transaction = Order::create([
            'OrderID' => $OrderID,
            'Email' =>  $user->email,
            'PaymentMethodID' => $request->PaymentMethodID,
            'ShipmentTypeID' => $request->ShipmentTypeID,
            'OrderDate'=> now(),
            'OrderDestination'=> $request->address,
            'PaymentMethodID'=> $request->PaymentMethod,
            'ShipmentTypeID'=> $request->ShipmentMethod,
        ]);

        // create a new transaction details for each cart item
        foreach ($cartItems as $cartItem) {
            OrderDetail::create([
                'OrderID' => $OrderID,
                'ProductID' => $cartItem->ProductID,
                'Quantity' => $cartItem->Quantity,
            ]);
        }

        // delete all the cart items
        Cart::where('email', $user->email)->delete();

        return redirect()->route('inventory')->with('success', 'Transaction successful');
    }
}
