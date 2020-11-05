<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','slug','description'];

    //function slug
    public function getRouteKeyName()
    {
        return 'slug';
    }

    //function product
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
