<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class ProductoImage extends Model
{
    //$productImage->products
    public function product(){
        return $this->belongsTo(Product::class);
    }

    // Accesor
    public function getUrlAttribute(){

        if(substr($this->image,0,4)==='http'){
            return $this->image;
        }

        return '/images/products/'.$this->image;
    }
}
