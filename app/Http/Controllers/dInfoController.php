<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use DB;

class dInfoController extends Controller
{
    /**
     * Show resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

    }

    /**
     * Show resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listPagoda(){
	    $pagoda = DB::table('dtb_submenu')
	    ->where('status','1')
	    ->where('menu_type','Pagodas')
	    ->paginate(9);
    	 return view("Menu/pagoda")->with('Pagoda',$pagoda);

    }
}
