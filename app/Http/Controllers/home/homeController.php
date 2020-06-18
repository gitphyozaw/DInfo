<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class homeController extends Controller
{
    public function index(){}
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
 
            $data = DB::table('dtb_submenu')->select("*")
                ->where("name","LIKE","%{$key_word}%")
                ->orWhere("title","LIKE","%{$key_word}%")
                ->get();

            if(count($data)>0){
                $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
                foreach($data as $row)
                {
                    $output .= '
                   <li class ="complete_li">
                        <a href="#">
                            <div class="row col-sm-12">
                                <div class="col-sm-2 complete_img"><img src="../public/uploadedimages/submenu/restaurant.jpg " alt="img"  width="120px" height="100px">
                                </div>
                                <div class="col-sm-10 complete_desc">
                                <h3>'.$row->name.'</h3>
                                <p>'.str_limit($row->description, 150, '').'</p>
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
