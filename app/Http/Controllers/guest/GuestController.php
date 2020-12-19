<?php

namespace App\Http\Controllers\guest;

use App\Ads;
use App\Category;
use App\SubCategory;
use App\Ukm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuestController extends Controller
{
    public function home(){
        $category = Category::all();
        $ads = Ads::all();
        $store = Ukm::take(20)->get();
        $rekom = Ukm::orderBy('id', 'desc')->take(8)->get();
        return view('guest.home')
            ->with('ads', $ads)
            ->with('store', $store)
            ->with('rekom', $rekom)
            ->with('category', $category);
    }

    public function category($category){
        $ctgr = Category::where('slug', $category)->first();
        $category = Category::all();
        $sub = SubCategory::where('category_id', $ctgr->id)->get();
//        $prroduct =
        return view('guest.category')
            ->with('ctgr', $ctgr)
            ->with('category', $category)
            ->with('sub', $sub);
    }
}
