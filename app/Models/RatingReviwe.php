<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingReviwe extends Model
{
    use HasFactory;
    protected $fillable = [
        'ProductRating',
        'ProductReview',
        'Email',
        'ProductID',
    ];

    public function User(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function Product(): HasOne
    {
        return $this->hasOne(Product::class);
    }


}
