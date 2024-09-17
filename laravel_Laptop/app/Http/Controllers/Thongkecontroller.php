<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Thongkecontroller extends Controller
{
    public function index(){
        return view('admins.Thongke.index');
    }
}
