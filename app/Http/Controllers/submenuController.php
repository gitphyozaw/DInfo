<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Pagination\Paginator;

use DB;
use Session;
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

        //$upd_data = Session::get('Upd_data');
        //$upd_data = isset($upd_data)? $upd_data : null;

	    return view("Admin/submenuRegistration")
       // ->with('Upd_data',$upd_data)
	    ->with('Menu',$all_menu)
	    ->with('Submenu',$all_submenu);
	}
	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   	public function submenuInsert(Request $request){
dd($request);die;
        $this->validate($request, [
           'submenu' => 'required'
       ]);

        if($request['flag']=="update"){//update

            $id = $request["ID"];
            $this->update($request,$id);

        }else{//insert
            $sel_menu = $request['menu'];
            $chk  = $request['chk'];
            $menu = explode(',', $sel_menu);
            if(!empty($menu)){
                $menu_id = isset($menu['0'])? $menu['0'] : null;
                $menu_type = isset($menu['1'])? $menu['1'] :null;
            }
            if(!empty($chk)){
                if(count($chk) == 3){
                    $season = "other";
                }else if(count($chk) == 2){
                   $season = $chk['0'].",".$chk['1'];
                }
                else{
                    $season = $chk['0'];
                }
            }else {
                $season = null;
            }
            

            $submenu_data = array(
                'menu_id'       => $menu_id ,
                'title'         => $request['title'] ,
                'name'          => $request['submenu'] ,
                'address'       => $request['address'] ,
                'description'   => $request['description'] ,
                'menu_type'     => $menu_type,
                'season'        => $season,
                'status'        => 1,
                'created_date'  =>date('Y-m-d H:i:s'),
                'updated_date'  =>date('Y-m-d H:i:s')

                 );

            try{
                DB::table('dtb_submenu')->insert($submenu_data);
                $request->session()->flash('alert-success', 'Save successful!');
            }catch (\Exception $e) {

                return $e->getMessage();
            }
        }
       

   		
        return redirect()->action('submenuController@index');
   }
   /**
     * edit the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function submenuEdit($id)
    {

        $upd_data = DB::table('dtb_submenu')->where('id',$id)->first();
       //Session::flash('Upd_data', $upd_data);
        $season = explode(',', $upd_data->season);
        $s0 = isset($season['0'])? $season['0'] :"other";
        $s1 = isset($season['1'])? $season['1'] :"other";
        

        $all_menu = DB::table('dtb_menu')->where('status','1')->get();
        $all_submenu = DB::table('dtb_submenu')->where('status','1')->paginate(2);
        //return redirect()->action('submenuController@index');
        return view("Admin/submenuRegistration")
        ->with('Upd_data',$upd_data)
        ->with('Season0',$s0)
        ->with('Season1',$s1)
        ->with('Menu',$all_menu)
        ->with('Submenu',$all_submenu);
        }

    public function update($request,$id){
       
        $sel_menu = $request['menu'];
        $chk  = $request['chk'];

        $menu = explode(',', $sel_menu);
            if(!empty($menu)){
                $menu_id = isset($menu['0'])? $menu['0'] : null;
                $menu_type = isset($menu['1'])? $menu['1'] :null;
            }
            if(!empty(count($chk) == 3)){
               $season = "other";
            }else if(!empty(count($chk) == 2)){
               $season = $chk['0'].",".$chk['1'];
            }
            else{
                $season = $chk['0'];
            }


        $update_data = array(
            'menu_id'       => $menu_id ,
            'title'         => $request['title'] ,
            'name'          => $request['submenu'] ,
            'address'       => $request['address'] ,
            'description'   => $request['description'] ,
            'menu_type'     => $menu_type,
            'season'        => $season,
            'updated_date'  =>date('Y-m-d H:i:s')

             );
        try{
            DB::table('dtb_submenu')->where('id',$id)->update($update_data);
            $request->session()->flash('alert-success', 'Update successful!');
            }catch (\Exception $e) {

                return $e->getMessage();
            }
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
            DB::table('dtb_submenu')->where('id',$id)->update(["status"=>0]);
             //DB::table('dtb_submenu')->delete($id);
            $request->session()->flash('alert-success', 'Delete successful!');
        }catch (\Exception $e) {

            return $e->getMessage();
        }
        return redirect()->action('submenuController@index');
    }
}
