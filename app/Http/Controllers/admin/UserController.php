<?php

namespace App\Http\Controllers\admin;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function update(Request $request){
        $user = Auth::user();
        User::where('id', $user->id)->update([
            'name' => $request->name,
            'password' => bcrypt($request->password()),
        ]);
        if (!empty($request->image)){
            $extension = $request->image->getClientOriginalExtension();
            $filenametostore = md5($user->id . Carbon::now()) . '.' . $extension;
            $user->update([
                'image' => $request->image->storeAs('public/user', $filenametostore )
            ]);
        }

        Session::flash('success', 'success update profile');
        return redirect()->back();
    }
}
