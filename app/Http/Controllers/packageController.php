<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class packageController extends Controller
{
    public function index(){
    	return view('SiteInfo.packageRegistration');
    }
}
