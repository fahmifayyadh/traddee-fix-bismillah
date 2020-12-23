<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];

    public function productImage(){
        return $this->hasMany('App\ProductImage');
    }

    public function subCategory(){
        return $this->belongsTo('App\SubCategory', 'subCategory_id');
    }

    public function ukm(){
        return $this->belongsTo('App\Ukm', 'ukm_id');
    }
}
