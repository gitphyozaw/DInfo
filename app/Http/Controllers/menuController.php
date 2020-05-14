<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

use DB;
class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_menu = DB::table('dtb_menu')->where('status','1')->get();
        return view("Admin/menuRegistration")->with('Menu',$all_menu);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
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
            DB::table('dtb_menu')->insert($menu_data);
            $request->session()->flash('alert-success', 'Save successful!');
        }catch (\Exception $e) {

            return $e->getMessage();
        }
        return redirect()->action('menuController@index');
       
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
             DB::table('dtb_menu')->delete($id);
            $request->session()->flash('alert-success', 'Delete successful!');
        }catch (\Exception $e) {

            return $e->getMessage();
        }
        return redirect()->action('menuController@index');
    }
}
