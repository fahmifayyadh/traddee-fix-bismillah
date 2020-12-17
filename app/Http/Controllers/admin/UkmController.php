<?php

namespace App\Http\Controllers\admin;

use App\Ukm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class UkmController extends Controller
{
    public function active($id){
        $merc = Ukm::where('id', $id)->update(['active'=>1]);

        Session::flash('success', 'success active merchant');
        return redirect()->back();
    }

    public function inactive($id){
        $merc = Ukm::where('id', $id)->update(['active'=>0]);

        Session::flash('success', 'success inactive merchant');
        return redirect()->back();
    }

    public function search($key){
        $merch = Ukm::where('name', 'like', '%'.$key.'%')->get();

        return view('admin.index')
            ->with('merch', $merch)
            ->with('page', 'search');
    }
}
