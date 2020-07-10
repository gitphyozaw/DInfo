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
	    $all_submenu = DB::table('dtb_submenu')->where('status','1')->paginate(5);

        //$upd_data = Session::get('Upd_data');
        //$upd_data = isset($upd_data)? $upd_data : null;

	    return view("Admin/submenuRegistration")
       // ->with('Upd_data',$upd_data)
	    ->with('Menu',$all_menu)
	    ->with('Submenu',$all_submenu);
	}

    /**
     * @desc   store image into folder
     * @param  \Illuminate\Http\Request  $request->file
     * @return \Illuminate\Http\Response
     * @author phyozaw@5/29/2020
     */
     public function storeImage(Request $request )
    {   
        /********store into folder********/
        $new_names = [];
        if($request->hasfile('pro-image'))
        {           
            foreach ($request->file('pro-image') as $key => $value) {
                 $imageName = $value->getClientOriginalName();
                    $value->move(public_path('/uploadedimages/submenu'), $imageName);
                    $new_names[$key] = $imageName;
            }//endforeach 
        }
        echo json_encode($new_names);
         /********remove from upload folder********/
        /*if(!empty($request['filename'])){
            unlink(base_path()."/../html/upload/save_image/".$request['name']);
        }*/
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

        if($request['flag']=="update"){//update

            $id = $request["ID"];
            $this->update($request,$id);

        }else{//insert
            DB::beginTransaction();
            try{

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

                
                    DB::table('dtb_submenu')->insert($submenu_data);
                    $max_id  =  DB::table('dtb_submenu')->select('id')->max('id');
                    if(!empty($request["img_hd"][0])){
                         
                        $image = explode(',', $request["img_hd"][0]);
                         
                        foreach ($image as $key => $value) {
                            $type = explode('.', $value);
                            if($key == 0){
                                $type  = "logo";
                            }else{
                                $type = $type[1];
                            }

                            $submenu_image = array(
                            'submenu_id'      => $max_id ,
                            'image'            => $value ,
                            'type'            => $type 
                             );

                            DB::table('dtb_submenu_image')->insert($submenu_image);
                        }
                    }
                DB::commit();
                $request->session()->flash('alert-success', 'Save successful!');
            }catch (\Exception $e) {
                DB::rollback();
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

        $upd_data = DB::table('dtb_submenu')->where('dtb_submenu.id',$id)->first();
        $edit_img = DB::table('dtb_submenu_image')->where('submenu_id',$id)->get();
        /**for season check vaildate**/
        if(!empty($upd_data->season)){
            $season = explode(',', $upd_data->season);
            $s0 = isset($season['0'])? $season['0'] :"other";
            $s1 = isset($season['1'])? $season['1'] :"other";
            
        }else{
            $s0 = null;
            $s1 = null;
        }
        /***end***/
 
        $all_menu = DB::table('dtb_menu')->where('status','1')->get();
        $all_submenu = DB::table('dtb_submenu')->where('status','1')->paginate(2);
        //return redirect()->action('submenuController@index');
        return view("Admin/submenuRegistration")
        ->with('Upd_data',$upd_data)
        ->with('Season0',$s0)
        ->with('Season1',$s1)
        ->with('Edit_img',$edit_img)
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
        if(!empty($chk)){
            if(count($chk) == 3){
               $season = "other";
            }else if(count($chk) == 2){
               $season = $chk['0'].",".$chk['1'];
            }
            else{
                $season = $chk['0'];
            }
        }else{
             $season = "other"; 
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
            if(!empty($request["img_hd"][0])){
                        $image = explode(',', $request["img_hd"][0]);
                         
                        foreach ($image as $value) {
                            $type = explode('.', $value);
                            $submenu_image = array(
                            'submenu_id'      => $id ,
                            'image'            => $value ,
                            'type'            => $type[1] 
                             );

                            DB::table('dtb_submenu_image')->insert($submenu_image);
                        }
                    }
            $request->session()->flash('alert-success', 'Update successful!');
            }catch (\Exception $e) {

                return $e->getMessage();
            }
            
    } 
    
    /**
     * @desc    edit delete image from image table
     * @author  phyozaw@2019/09/
     * @param   Request $request
     * @return  $data
     */ 
     public function deleteImage(Request $request){
        $id = $request->id;
        if ($id) {
            $db_filename = DB::table('dtb_submenu_image')->where('id',$id )->first();

            try {
         
                unlink(public_path('/uploadedimages/submenu/').$db_filename->image);
            }
            catch (\Exception $e) {
            }
            DB::table('dtb_submenu_image')->where('id',$id)->delete();

            return back();
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
