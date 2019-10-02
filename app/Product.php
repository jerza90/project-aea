<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['product_name','product_code','product_unit','product_price_unit','product_owner','product_active'];
    // protected $guarded = ['id'];

    public function histories(){
        return $this->hasOne(Product_history::class,'product_code','product_code');
    }
}
