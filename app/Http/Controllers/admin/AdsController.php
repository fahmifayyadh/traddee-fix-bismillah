<?php

namespace App\Http\Controllers\admin;

use App\Ads;
use App\Notification;
use App\RequestAds;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function acc($id){
        $now = Carbon::now();
        $user = Auth::user();
        RequestAds::where('id', $id)->update([
            'acc' => $now
        ]);

        Notification::create([
            'category' => 5,
            'user_id' => 1,
            'title' => $user->name.' as admin has been ACC Ads merchant',
            'description' => $user->name.' as admin has been ACC Ads merchant'
        ]);

        Session::flash('success', 'success acc Ads');
        return redirect()->back();
    }

    public function download($id){
        $req = RequestAds::findOrFail($id);
        return response()->file(Storage::url($req->image));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $ads = Ads::findOrFail($id);
        $user = Auth::user();
        $extension = $request->image->getClientOriginalExtension();
        $filenametostore = md5($user->id . Carbon::now()) . '.' . $extension;
        $ads->update([
            'image' => $request->image->storeAs('public/ads', $filenametostore),
            'admin_id' => $user->id,
        ]);

        $notif = Notification::create([
            'category' => 3,
            'user_id' => 1,
            'title' => 'admin update ads image',
            'description' => $user->name.' as Admin has change image ads',
        ]);

        Session::flash('success','success update image in id'.$ads->id);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();
        $ads = Ads::findOrFail($id);
        Storage::delete($ads->image);

        if (!empty($ads->image)){
            $ads->update([
                'image' =>''
            ]);

            Notification::create([
                'category' => 4,
                'user_id' => 1,
                'title' => 'admin update ads image',
                'description' => $user->name.' as Admin has change image ads',
            ]);

            Session::flash('success', 'success delete image');
        }else{
            Session::flash('error', 'image is empty');
        }

        return redirect()->back();
    }
}
