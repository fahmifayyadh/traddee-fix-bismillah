<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function daftar()
    {
        return view('guest.registrasiToko');
    }
}
