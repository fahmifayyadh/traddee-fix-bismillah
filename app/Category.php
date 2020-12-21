<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=[];

    public function subCategory(){
        return $this->hasMany('App\SubCategory');
    }

    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
