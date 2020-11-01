<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = "bill_detail";

    public function bills(Type $var = null)
    {
        return $this->belongTo('App\Bill', 'bill_id', 'id');
    }
    public function product()
    {
        return $this->belongTo('App\Product', 'product_id', 'id');
    }
}
