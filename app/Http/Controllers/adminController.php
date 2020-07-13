<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class adminController extends Controller
{
	public function trashList(){
		$all_menu = DB::table('dtb_menu')->where('status','0')->get();
	    $all_submenu = DB::table('dtb_submenu')->where('status','0')->get();

	    $arr = array(
	    	'Menu' => $all_menu,
	    	'Submenu' => $all_submenu
	     );
	    return view('Admin.trash')->with("Arr",$arr);
    }
}
