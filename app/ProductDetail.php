<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $table = "product_detail";

    public function product()
    {
        return $this->belongTo('App\Product', 'product_id', 'id');
    }
}
