<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    protected $guarded=[];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function request(){
        return $this->hasMany('App\RequestAds');
    }

    public function product(){
        return $this->hasMany('App\Product');
    }
}
