<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class builtListController extends Controller
{
	  public function buildlist($id){
        //fetch post data
        $buildlists = buildlist::find($id);
        
        //pass posts data to view and load list view
        return view('buildlist.buildlist', ['buildlists' => $buildlists]);
    }
}
