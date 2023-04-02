<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'OrderID',
        'ProductID',
        'Quantity',
        
    ];

    public function order(): HasOne
    {
        return $this->hasOne(Order::class);
    }

    public function product(): HasOne
    {
        return $this->hasOne(Product::class);
    }

    public function cart(): HasOne
    {
        return $this->hasOne(Cart::class);
    }
}
