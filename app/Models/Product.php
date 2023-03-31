<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'ProductID';
    protected $casts = [
        'ProductID' => 'string'
    ];
    protected $fillable = [
        'ProductID',
        'ProductName',
        'ProductPrice',
        'ProductCategory',
        'ProductDescription',
        'ProductImage',
        'ProductStock',
        'StoreName',
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
