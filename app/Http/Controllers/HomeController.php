<?php

namespace App\Http\Controllers;

use App\Ads;
use App\Product;
use App\RequestAds;
use App\Ukm;
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
        if ($user->role == 'admin'){
            return redirect()->route('admin.index');
        }
        if ($user->role == 'ukm'){
            return redirect()->route('merchant.index');
        }
        return view('home');
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
        $ukm = $user->ukm;

        return view('ukm.index')
            ->with('product', $product)
            ->with('ukm', $ukm);
    }
}
