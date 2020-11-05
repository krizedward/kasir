<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id','user_id','invoice','customer_name','total','pay','note'];

    //function many to many users
    public function user()
    {
      return $this->belongsTo('App\User','user_id');
    }

    //function many to many orderDetail
    public function orderDetail()
    {
      return $this->hasMany(Orderdetail::class);
    }
}
