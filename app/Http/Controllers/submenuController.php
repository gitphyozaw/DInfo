<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Pagination\Paginator;

use DB;

class submenuController extends Controller
{
	/**
     * Show resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
	    $all_menu = DB::table('dtb_menu')->where('status','1')->get();
	    $all_submenu = DB::table('dtb_submenu')->where('status','1')->paginate(2);
	    return view("Admin/submenuRegistration")
	    ->with('Menu',$all_menu)
	    ->with('Submenu',$all_submenu);
	}
	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   	public function submenuInsert(Request $request){
       $this->validate($request, [
           'submenu' => 'required'
       ]);

   		$sel_menu = $request['menu'];
   		$menu = explode(',', $sel_menu);
   		if(!empty($menu)){
   			$menu_id = isset($menu['0'])? $menu['0'] : null;
   			$menu_type = isset($menu['1'])? $menu['1'] :null;
   		}

        $submenu_data = array(
            'menu_id' 		=> $menu_id ,
            'name' 			=> $request['submenu'] ,
            'address' 		=> $request['address'] ,
            'description' 	=> $request['description'] ,
            'menu_type' 	=> $menu_type,
            'status' 		=> 1,
            'created_date' 	=>date('Y-m-d H:i:s'),
            'updated_date' 	=>date('Y-m-d H:i:s')

             );

        try{
            DB::table('dtb_submenu')->insert($submenu_data);
            $request->session()->flash('alert-success', 'Save successful!');
        }catch (\Exception $e) {

            return $e->getMessage();
        }
        return redirect()->action('submenuController@index');
   }
   /**
     * edit the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
    	
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
         try{
             DB::table('dtb_submenu')->delete($id);
            $request->session()->flash('alert-success', 'Delete successful!');
        }catch (\Exception $e) {

            return $e->getMessage();
        }
        return redirect()->action('submenuController@index');
    }
}
