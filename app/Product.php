<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function histories(){
        return $this->hasOne(Product_history::class,'product_code','product_code');
    }
}
