<?php

namespace App\Http\Controllers\ukm;

use App\RequestAds;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RequestAdsController extends Controller
{
    public function req(Request $request){
        $user = Auth::user();
        $extension = $request->image->getClientOriginalExtension();
        $filenametostore = md5($user->id . Carbon::now()) . '.' . $extension;
        RequestAds::create([
            'ukm_id' => $user->ukm->id,
            'image' => $request->image->storeAs('public/ads', $filenametostore)
        ]);

        Session::flash('success', 'Pengajuan pembuatan iklan sudah dikirim');
        return redirect()->back();
    }
}
