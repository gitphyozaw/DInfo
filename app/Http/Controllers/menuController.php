<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Storage;
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
       if($request['flag']=="update"){//update

            $id = $request["ID"];
            $this->menuUpdate($request,$id);
             $upd_data = DB::table('dtb_menu')->where('id',$id)->first();
        $all_menu = DB::table('dtb_menu')->where('status','1')->get();
        return view("Admin/menuRegistration")
        ->with('Upd_data',$upd_data)
        ->with('Menu',$all_menu);

        }else{//insert
            try{
                if(!empty($request->image)){
                $imageName = $request->image->getClientOriginalName();
                
                $request->image->move(public_path('/uploadedimages/menu'), $imageName);
                }else{
                    $imageName = null;
                }
                $menu_data = array(
                    'name' =>$request['menu'] ,
                    'image'=>$imageName,
                    'status' =>1,
                    'created_date' =>date('Y-m-d H:i:s')

                     );
           
                DB::table('dtb_menu')->insert($menu_data);
                $request->session()->flash('alert-success', 'Save successful!');
            }catch (\Exception $e) {

                return $e->getMessage();
            }
        return redirect()->action('menuController@index');

        }
       
    }
 
    /**
     * edit the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function menuEdit($id)
    {

        $upd_data = DB::table('dtb_menu')->where('id',$id)->first();
        $all_menu = DB::table('dtb_menu')->where('status','1')->get();
        return view("Admin/menuRegistration")
        ->with('Upd_data',$upd_data)
        ->with('Menu',null);
        }


    public function menuUpdate($request,$id){
        try{
            if(count($request->files)> 0){
                $imageName = $request->image->getClientOriginalName();
                
                $request->image->move(public_path('/uploadedimages/menu'), $imageName);
                }else{
                    $imageName = $request->image;
                }

            $update_data = array(
                    'name' =>$request['menu'] ,
                    'image'=>$imageName,
                    'status' =>1,
                    'created_date' =>date('Y-m-d H:i:s')

             );
        
            DB::table('dtb_menu')->where('id',$id)->update($update_data);
            $request->session()->flash('alert-success', 'Update successful!');
            }catch (\Exception $e) {

                return $e->getMessage();
            }

        $upd_data = DB::table('dtb_menu')->where('id',$id)->first();
        $all_menu = DB::table('dtb_menu')->where('status','1')->get();
        return view("Admin/menuRegistration")
        ->with('Upd_data',$upd_data)
        ->with('Menu',$all_menu);
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
             
            DB::table('dtb_menu')->where('id',$id)->update(["status"=>0]);
            //DB::table('dtb_menu')->delete($id);
            $request->session()->flash('alert-success', 'Delete successful!');
        }catch (\Exception $e) {

            return $e->getMessage();
        }
        return redirect()->action('menuController@index');
    }
}
