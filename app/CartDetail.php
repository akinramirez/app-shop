<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Product;
class CartDetail extends Model
{
    // CartDetail N                 1 Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
