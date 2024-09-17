<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sanpham = DB::table('san_pham')->get();
        $slider = DB::table('slider')->get();
        $data=["sanpham"=>$sanpham,"slider"=>$slider,];
        return view('client.layouts.index', $data);
    }

    public function adminHome(){
        return view('admins.Thongke.index');
    }
}
