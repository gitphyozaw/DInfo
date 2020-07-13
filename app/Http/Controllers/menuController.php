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
        $all_menu = DB::table('dtb_menu')
        ->join('dtb_menu_image','dtb_menu_image.menu_id','=','dtb_menu.id')
        ->where('status','1')
        ->where('type','logo')
        ->get();
        return view("Admin/menuRegistration")->with('Menu',$all_menu);

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
                    $value->move(public_path('/uploadedimages/menu'), $imageName);
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
    public function create(Request $request)
    {
       $this->validate($request, [
           'menu' => 'required'
       ]);
       if($request['flag']=="update"){//update

            $id = $request["ID"];
            $this->menuUpdate($request,$id);
            $upd_data = DB::table('dtb_menu')->where('id',$id)->first();
            $all_menu = DB::table('dtb_menu')
            ->join('dtb_menu_image','dtb_menu_image.menu_id','=','dtb_menu.id')
            ->where('status','1')
            ->where('type','logo')
            ->get();
            
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
                    'status' =>1,
                    'created_date' =>date('Y-m-d H:i:s')

                     );
                    DB::table('dtb_menu')->insert($menu_data);
                    $max_id  =  DB::table('dtb_menu')->select('id')->max('id');
                    if(!empty($request["img_hd"][0])){
                         
                        $image = explode(',', $request["img_hd"][0]);
                         
                        foreach ($image as $key => $value) {
                            $type = explode('.', $value);
                            if($key == 0){
                                $type  = "logo";
                            }else{
                                $type = $type[1];
                            }

                            $menu_image = array(
                            'menu_id'      => $max_id ,
                            'image'        => $value ,
                            'type'         => $type 
                             );

                            DB::table('dtb_menu_image')->insert($menu_image);
                        }
                    }
           
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

        $edit_img = DB::table('dtb_menu_image')
        ->where('menu_id',$id)
        ->where('type',"logo")
        ->get();
        return view("Admin/menuRegistration")
        ->with('Edit_img',$edit_img)
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
                    'status' =>1,
                    'created_date' =>date('Y-m-d H:i:s')

             );
        
            DB::table('dtb_menu')->where('id',$id)->update($update_data);
            $request->session()->flash('alert-success', 'Update successful!');
            }catch (\Exception $e) {

                return $e->getMessage();
            }

       /* $upd_data = DB::table('dtb_menu')->where('id',$id)->first();
       
        return view("Admin/menuRegistration")
        ->with('Upd_data',$upd_data)
        ->with('Menu',$all_menu);*/
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
         
                unlink(public_path('/uploadedimages/menu/').$db_filename->image);
            }
            catch (\Exception $e) {
            }
            DB::table('dtb_menu_image')->where('id',$id)->delete();

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
             
            DB::table('dtb_menu')->where('id',$id)->update(["status"=>0]);
            //DB::table('dtb_menu')->delete($id);
            $request->session()->flash('alert-success', 'Delete successful!');
        }catch (\Exception $e) {

            return $e->getMessage();
        }
        return redirect()->action('menuController@index');
    }
}
