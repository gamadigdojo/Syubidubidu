<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'OrderID',
        'OrderDate',
        'OrderDestination',
        'PaymentMethodID',
        'ShipmentTypeID',
        'Email',
    ];

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class, 'OrderID');
    }

    public function shipmentType(): HasOne
    {
        return $this->hasOne(ShipmentType::class);
    }

    public function paymentMethod(): HasOne
    {
        return $this->hasOne(PaymentMethod::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
