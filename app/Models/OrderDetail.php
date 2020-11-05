<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable=['id','order_id','product_id','product_name','product_price','qty','subtotal']
}
