<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = "product_type";

    public function product(Type $var = null)
    {
        return $this->hasMany('App\Product', "type_id", 'id');
    }
}
