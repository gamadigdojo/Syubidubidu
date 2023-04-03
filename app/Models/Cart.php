<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cart extends Model
{
    use HasFactory;
    // primary key = ProductID and Email (composite key)
    protected $primaryKey = 'ProductID';
    protected $casts = [
        'ProductID' => 'string'
    ];
    // protected $casts = [
    //     'ProductID' => 'string',
    //     'Email' => 'string'
    // ];
    protected $fillable = [
        'ProductID',
        'Quantity',
        'Email',
    ];

    public function User(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductID', 'ProductID');
    }

}
