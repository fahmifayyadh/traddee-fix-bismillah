<?php

namespace App\Http\Controllers\guest;

use App\Ads;
use App\Category;
use App\SubCategory;
use App\Ukm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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

    public function daftar()
    {
        return view('guest.registrasiToko');
    }

    public function formRegist(Request $request)
    {
        // DB::beginTransaction();
        // try{
            $user = User::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'referal_id' => $request->referal_id,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            $ukm = Ukm::create([
                'user_id' => $user->id,
                'merchant_name' => $request->merchant_name,
                'slug' => \Str::slug($request->merchant_name),
                'address' => $request->address,
                'province' => $request->province,
                'city' => $request->city,
                'iframe' => 'kosong',
                'district' => $request->district,
            ]);
        // }catch(Exception $e){
        //     DB::rollback();
        //     Session::flash('error', 'gagal membuat data');
        //     return redirect()->back()->withInput();
        // }

        // DB::commit();
        Session::flash('success', 'registrasi sukses. silahkan tunggu admin untuk verifikasi, notifikasi akan dikirim melalui email');
        return redirect()->back();
    }
}
