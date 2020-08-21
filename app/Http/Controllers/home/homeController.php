<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class homeController extends Controller
{
    public function index(){
         $show_menu = DB::table('dtb_submenu')
            ->join('dtb_submenu_image','dtb_submenu_image.submenu_id','=','dtb_submenu.id')
            ->where('status','1')
            ->where('menu_id',1)
            ->where('type','logo')
            ->paginate(10);
        $sks = DB::table('dtb_submenu')
            ->join('dtb_submenu_image','dtb_submenu_image.submenu_id','=','dtb_submenu.id')
            ->where('status','1')
            ->where('menu_id',1)
            ->where('title',"Shin Koe Shin Pagodas")
            ->where('type','logo')
            ->get();

        $all_menu = DB::table('dtb_menu')
            ->join('dtb_menu_image','dtb_menu_image.menu_id','=','dtb_menu.id')
            ->where('status','1')
            ->get();
        $view = DB::table('dtb_menu')->where('status','1')->select('views')->get();
        $arr  = array(
            'Menu' => $all_menu,
            'Sks' => $sks,
            'Showmenu' => $show_menu,
            'View' => $view
             );
        return view('SiteInfo/index')
                   /* -> with('Menu',$all_menu)
                    -> with('Sks',$sks)
                    -> with('Showmenu',$show_menu);*/
                    -> with('Arr',$arr);

    }

    public function showMenu($id){
        $show_menu = DB::table('dtb_submenu')
        ->join('dtb_submenu_image','dtb_submenu_image.submenu_id','=','dtb_submenu.id')
        ->where('status','1')
        ->where('menu_id',$id)
        ->where('type','logo')
        ->paginate(15);

         $sks = DB::table('dtb_submenu')
        ->join('dtb_submenu_image','dtb_submenu_image.submenu_id','=','dtb_submenu.id')
        ->where('status','1')
        ->where('menu_id',$id)
        ->where('title',"Shin Koe Shin Pagodas")
        ->where('type','logo')
        ->get();


        DB::table('dtb_menu')->where('id',$id)->increment('views');
        

        $all_menu = DB::table('dtb_menu')
        ->join('dtb_menu_image','dtb_menu_image.menu_id','=','dtb_menu.id')
        ->where('status','1')
        ->get();
        $view = DB::table('dtb_menu')->where('status','1')->select('views')->get();
        
        $arr = array(
            'Menu' => $all_menu,
            'Sks' => $sks,
            'Showmenu' => $show_menu,
            'View' => $view
             );

        return view('SiteInfo/index')->with("Arr",$arr);
        /*->with('Sks',$sks)
        -> with('Menu',$all_menu)
        ->with('Showmenu',$show_menu);*/

    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
    	 
       
        if($request->get('query'))
        {
            $key_word = $request->input('query');
 
            $data = DB::table('dtb_submenu')
            //->join('dtb_submenu_image', 'dtb_submenu.id', '=', 'dtb_submenu_image.submenu_id')
                ->where("name","LIKE","%{$key_word}%")
                ->where("status","1")
                ->orWhere("title","LIKE","%{$key_word}%")
                ->select('dtb_submenu.*')   
                ->get();

            if(count($data)>0){
                $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
                foreach($data as $row)
                {
                $image_arr = DB::table('dtb_submenu_image')
                ->where('submenu_id',$row->id)
                ->where('type',"logo")
                ->first();
               

                    $output .= '
                   <li class ="complete_li">
                        <a href="#">
                            <div class="row col-sm-12">
                                <div class="col-sm-2 complete_img"><img src="../public/uploadedimages/submenu/'.$image_arr->image.' " alt="img" >
                                </div>
                                <div class="col-sm-10 complete_desc">
                                <h3>'.$row->name.'</h3> 
                                <p>'.str_limit($row->description, 150, '').'<b style ="color:#20a2a2; ">. .  .</b></p>
                                <div class="row col-sm-12 address-row">
                                    <div class="col-sm-2 address-img">
                                        <img src="../public/img/address_icon.png " class="  " >
                                    </div>
                                    <div class="col-sm-10 ">
                                        <address> '.$row->address.'</address>
                                    </div>

                                </div>

                                </div>

                            </div>
                        </a>
                   </li>
                   ';
                }
                  $output .= '</ul>';
                  echo $output;
            }
            
        }
           
        //return response()->json($data);
    }

    public function pagodaMenu(){
    	print("hello");die();
    }
}
