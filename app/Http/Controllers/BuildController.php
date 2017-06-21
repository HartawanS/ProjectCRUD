<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Build;

class BuildController extends Controller
{
	  public function index($id){
	  	// dd($id);
        //fetch post data
        $buildlists = Build::where('idproject','=',$id)->get();
        
        //pass posts data to view and load list view
        return view('buildlist.buildlist', ['buildlists' => $buildlists,'id'=>$id]);
    }

    public function add($id)
    {
        // dd($id);
        $buildlists = Build::where('idproject','=',$id)->get();
    	return view('buildlist.buildlist-new', ['buildlists' => $buildlists,'id'=>$id]);
    }

    public function insert($id, Request $request){
        //validate post data
        $this->validate($request, [
        	'idproject'=>'required',
            'type' => 'required',
            'link_file_APK' => 'required',
            'note' => 'required'
        ]);
        
        //get post data
        $postData = $request->all();
        
        //insert post data
        Build::create($postData);
        
        //store status message
        // Session::flash('success_msg', 'Post added successfully!');

        return redirect()->route('buildlist.index',['id' => $request->get('idproject')]);
    }
    
    public function edit($id){
        //get post data by id
        $buildlist = Build::find($id);
        
        //load form view
        return view('buildlist.buildlist-edit', ['buildlist' => $buildlist]);
    }
    
    public function update($id, Request $request){
        //validate post data
        $this->validate($request, [
        	'idproject'=>'required',
            'type' => 'required',
            'note' => 'required',
            'link_file_APK' => 'required'
        ]);
        
        //get post data
        $postData = $request->all();
        
        //update post data
        Build::find($id)->update($postData);
        
        //store status message
        // Session::flash('success_msg', 'Post updated successfully!');

        return redirect()->route('buildlist.index', ['id' => $request->get('idproject')]);
    }
    
    public function delete($id){
        //update post data
        Build::find($id)->delete();
        
        //store status message
        // Session::flash('success_msg', 'Post deleted successfully!');

        return redirect()->route('buildlist.index',['id' => $request->get('idproject')]);
    }
}