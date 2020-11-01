<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";

    public function product_type()
    {
        return $this->belongTo('App\ProductType', 'type_id', 'id');
    }
    public function product_detail()
    {
        return $this->hasMany('App\ProductDetail', 'product_id', 'id');
    }
    public function bill_detail()
    {
        return $this->hasMany('App\BillDetail', 'product_id', 'id');
    }
}
