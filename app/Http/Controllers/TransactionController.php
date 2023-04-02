<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function getTransactionPage(){
        return view('transaction');
    }
}
