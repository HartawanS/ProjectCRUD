<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\builtlist;

class builtListController extends Controller
{
	  public function index($id){
        //fetch post data
        $buildlists = builtList::where('idproject',$id);
        
        //pass posts data to view and load list view
        return view('builtlist.buildlist', ['buildlists' => $buildlists]);
    }
}
