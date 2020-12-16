<?php

namespace App\Http\Controllers;

use App\Ads;
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
        $ads = Ads::all();
        return view('admin.index')
            ->with('ads', $ads);
    }
}
