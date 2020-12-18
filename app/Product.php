<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];

    public function productImage(){
        return $this->hasMany('App\ProductImage');
    }
}
