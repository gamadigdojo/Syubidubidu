<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'ProductID',
        'ProductName',
        'ProductPrice',
        'ProductDescription',
        'ProductImage',
        'ProductStock',
    ];

    public function ratingReview(): HasMany
    {
        return $this->hasMany(RatingReviwe::class);
    }

    public function cart(): HasMany
    {
        return $this->hasMany(Cart::class);
    }

    public function OrderDetail(): HasMany
    {
        return $this->hasMany(OrderDetail::class);
    }


}