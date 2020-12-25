<?php

namespace App\Http\Controllers;

use App\Ads;
use App\Category;
use App\Product;
use App\RequestAds;
use App\Ukm;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function landingPage(){
        return view('landingPage');
    }

    public function index()
    {
        $user = Auth::user();
        if ($user->role == 'super admin') {
            return redirect()->route('suadmin.index');
        }
        else if ($user->role == 'admin'){
            return redirect()->route('admin.index');
        }
        if ($user->role == 'ukm' && $user->ukm->active == 1){
            return redirect()->route('merchant.index');
        }else{
            return view('home');
        }
    }

    public function superadmin()
    {
        $now = Carbon::now();
        $user = Auth::user();
        $reqAds = RequestAds::all();
        $merch = Ukm::all();

        return view('admin.superAdmin')
        ->with('reqAds', $reqAds)
        ->with('now', $now)
        ->with('user', $user)
        ->with('merch', $merch);
    }
    public function admin(){
        $user = Auth::user();
        $ads = Ads::all();
        $merch = Ukm::all();
        $reqAds = RequestAds::all();
        return view('admin.index')
            ->with('ads', $ads)
            ->with('merch', $merch)
            ->with('user', $user)
            ->with('reqAds', $reqAds);
    }

    public function ukm(){
        $user = Auth::user();
        $product = Product::where('ukm_id', $user->ukm->id)->get();
        $category = Category::all();
        $ukm = $user->ukm;
        if ($user->ukm->active != 1) {
            return redirect('home');
        }

        return view('ukm.index')
            ->with('product', $product)
            ->with('ukm', $ukm)
            ->with('category', $category);
    }
}
