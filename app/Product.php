<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];

    public function productImage(){
        return $this->hasMany('App\ProductImage');
    }

    public function category(){
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function subCategory(){
        return $this->belongsTo('App\SubCategory', 'sub_category_id');
    }

    public function ukm(){
        return $this->belongsTo('App\Ukm', 'ukm_id');
    }
}
