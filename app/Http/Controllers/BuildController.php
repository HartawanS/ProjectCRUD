<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Build;
use App\Project;

class BuildController extends Controller
{

	  public function index($id){
	  	// dd($id);
        //fetch post data
        // $iduser = auth()->user()->id;

        // if(restrict($iduser, $id) == false){
        //     return redirect()->route('home');
        // }

        $buildlists = Build::where('idproject','=',$id)->get();
        $projectname =  $this->getProjectName($id);
        //pass posts data to view and load list view
        return view('buildlist.buildlist', ['buildlists' => $buildlists,'id'=>$id, 'projectname'=>$projectname]);
    }

    public function getProjectName($id)
    {
        $projectname = Project::find($id);

        return $projectname;
    }

    public function detail($id)
    {
        // $iduser = auth()->user()->id;
        // if(restrict($iduser, $id) == false){
        //     return redirect()->route('home');
        // }
        $buildlist = Build::find($id);
        $projectname = $this->getProjectName($buildlist->idproject);

         return view('buildlist.buildlist-detail', ['buildlist' => $buildlist,'projectname'=>$projectname]);
    }

    public function add($id)
    {
        // $iduser = auth()->user()->id;
        // if(restrict($iduser, $id) == false){
        //     return redirect()->route('home');
        // }
        // dd($id);
        $buildlists = Build::where('idproject','=',$id)->get();
        $projectname = $this->getProjectName($id);

    	return view('buildlist.buildlist-new', ['buildlists' => $buildlists,'id'=>$id,'projectname'=>$projectname]);
    }

    public function insert($id, Request $request){
        // $iduser = auth()->user()->id;
        // if(restrict($iduser, $id) == false){
        //     return redirect()->route('home');
        // }
        //validate post data
        $this->validate($request, [
        	'idproject'=>'required',
            'type' => 'required',
            'version'=>'required',
            'link_file_APK' => 'required',
            'note' => 'required'
        ]);

        //version
        $version = Build::where('idproject',$id)->where('type',$request->type)->max('version');

        if(!empty($version))
        //insert version into request
        $request->merge(['version'=>$version+0.01]);
        
        
        //get post data
        $postData = $request->all();
        
        //insert post data
        Build::create($postData);
        //store status message
        // Session::flash('success_msg', 'Post added successfully!');

        return redirect()->route('buildlist.index',['id' => $request->get('idproject')]);
    }
    
    public function edit($id){
        // $iduser = auth()->user()->id;
        // if(restrict($iduser, $id) == false){
        //     return redirect()->route('home');
        // }
        //get post data by id
        $buildlist = Build::find($id);
        $projectname = $this->getProjectName($buildlist->idproject);
        
        //load form view
        return view('buildlist.buildlist-edit', ['buildlist' => $buildlist,'projectname'=>$projectname]);
    }
    
    public function update($id, Request $request){
        // $iduser = auth()->user()->id;
        // if(restrict($iduser, $id) == false){
        //     return redirect()->route('home');
        // }
        //validate post data
        $this->validate($request, [
        	'idproject'=>'required',
            'type' => 'bail',
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
        $buildlist = Build::find($id);
        $idproject = $buildlist->idproject;
        $buildlist->delete();

        //store status message
        // Session::flash('success_msg', 'Post deleted successfully!');

        return redirect()->route('buildlist.index',['buildlist'=> $idproject]);

    }
}
