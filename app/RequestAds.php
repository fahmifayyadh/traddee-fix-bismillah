<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestAds extends Model
{
    protected $guarded=[];

    public function ukm(){
        return $this->belongsTo('App\Ukm', 'ukm_id');
    }
}
