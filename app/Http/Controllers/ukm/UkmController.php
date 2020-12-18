<?php

namespace App\Http\Controllers\ukm;

use App\Ukm;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class UkmController extends Controller
{
    public function updateProfile(Request $request){
        $user = Auth::user();
        $ukm = Ukm::where('user_id', $user->id)->update([
            'merchant_name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        if (!empty($request->image)){
            $extension = $request->image->getClientOriginalExtension();
            $filenametostore = md5($user->id . Carbon::now()) . '.' . $extension;
            Ukm::where('user_id', $user->id)->update([
                'image' => $request->image->storeAs('public/ukm', $filenametostore)
            ]);
        }

        Session::flash('success', 'success update profile');
        return redirect()->back();
    }

    public function informasiToko(Request $request){
        $user = Auth::user();
        User::where('id', $user->id)->update([
            'name' => $request->name_user,
            'phone' => $request->phone,
        ]);
        $ukm = Ukm::where('user_id', $user->id)->update([
            'address' => $request->address,
            'province' => $request->province,
            'city' => $request->city,
            'district' => $request->district,
            'village' =>$request->village,
            'debit' => $request->debit,
        ]);

        Session::flash('success', 'sukses update informasi toko');
        return redirect()->back();
    }
}
