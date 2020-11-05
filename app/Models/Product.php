<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id','name','slug','price'];

    //function get slug
    public function getRouteKeyName()
    {
      return 'slug';
    }

    //many to many with category
    public function category()
    {
      return $this->belongsTo(Category::class);
    }
}
