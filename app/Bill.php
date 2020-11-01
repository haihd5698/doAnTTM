<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";

    public function bill_detail(Type $var = null)
    {
        return $this->hasMany('App\BillDetail', 'bill_detail', 'id');
    }
    public function users()
    {
        return $this->belongTo('App\User', 'customer_id', 'id');
    }
}
