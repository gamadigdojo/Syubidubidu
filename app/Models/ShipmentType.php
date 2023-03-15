<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipmentType extends Model
{
    use HasFactory;
    protected $fillable = [
        'ShipmentTypeID',
        'ShipmentTypeName',
    ];

    public function Order(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
