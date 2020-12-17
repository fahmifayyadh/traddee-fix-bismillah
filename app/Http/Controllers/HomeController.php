<?php

namespace App\Http\Controllers;

use App\Ads;
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
        return view('home');
    }

    public function admin(){
        $user = Auth::user();
        $ads = Ads::all();
        $merch = Ukm::all();
        return view('admin.index')
            ->with('ads', $ads)
            ->with('merch', $merch)
            ->with('user', $user);
    }
}
