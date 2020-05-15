<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;


use DB;

class submenuController extends Controller
{
    public function index(){
	    $all_menu = DB::table('dtb_menu')->where('status','1')->get();
	    return view("Admin/submenuRegistration")->with('Menu',$all_menu);
	}

   	public function submenuInsert(Request $request){
	   	
	   		dd($request);die();
	       $this->validate($request, [
	           'menu' => 'required'
	       ]);

	        $menu_data = array(
	            'name' =>$request['menu'] ,
	            'status' =>1,
	            'created_date' =>date('Y-m-d H:i:s'),
	            'updated_date' =>date('Y-m-d H:i:s')

	             );

	        try{
	            DB::table('dtb_submenu')->insert($menu_data);
	            $request->session()->flash('alert-success', 'Save successful!');
	        }catch (\Exception $e) {

	            return $e->getMessage();
	        }
	        return redirect()->action('submenuController@index');
	   }
}
