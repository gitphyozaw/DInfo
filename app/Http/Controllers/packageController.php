<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class packageController extends Controller
{
    public function index(){
    	 $show_menu = DB::table('dtb_submenu')
            ->join('dtb_submenu_image','dtb_submenu_image.submenu_id','=','dtb_submenu.id')
            ->where('status','1')
            ->where('menu_id',1)
            ->where('type','logo')
            ->paginate(10);

        $all_menu = DB::table('dtb_menu')
            ->join('dtb_menu_image','dtb_menu_image.menu_id','=','dtb_menu.id')
            ->where('status','1')
            ->get();
        $view = DB::table('dtb_menu')->where('status','1')->select('views')->get();
    	$arr  = array(
            'Menu' => $all_menu,
            'Showmenu' => $show_menu,
            'View' => $view
             );

    	return view('SiteInfo.packageRegistration')-> with('Arr',$arr);
    }
}
