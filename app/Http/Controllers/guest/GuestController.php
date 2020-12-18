<?php

namespace App\Http\Controllers\guest;

use App\Ads;
use App\Ukm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuestController extends Controller
{
    public function home(){
        $ads = Ads::all();
        $store = Ukm::take(20)->get();
        $rekom = Ukm::orderBy('id', 'desc')->take(8)->get();
        return view('guest.home')
            ->with('ads', $ads)
            ->with('store', $store)
            ->with('rekom', $rekom);
    }

    public function category(){

    }
}
