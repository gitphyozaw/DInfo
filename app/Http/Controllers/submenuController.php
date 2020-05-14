<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class submenuController extends Controller
{
   public function index(){
   	 $all_menu = DB::table('dtb_menu')->where('status','1')->get();
     return view("Admin/submenuRegistration")->with('Menu',$all_menu);
   }
}
