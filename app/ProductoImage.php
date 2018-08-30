<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoImage extends Model
{
    //$productImage->products
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
