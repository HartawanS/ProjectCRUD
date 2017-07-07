<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Project;
class UsersController extends Controller
{    
	  public function index($id){
	  	// dd($id);
        //fetch post data
        $userlists = Users::where('idproject','=',$id)->get();
        $projectname =  $this->getProjectName($id);
        //pass posts data to view and load list view
        return view('userlist.userlist', ['userlists' => $userlists,'id'=>$id, 'projectname'=>$projectname]);
    }

    public function getProjectName($id)
    {
        $projectname = Project::find($id);

        return $projectname;
    }

    public function detail($id)
    {
        $userlist = Users::find($id);
        $projectname = $this->getProjectName($userlist->idproject);

         return view('userlist.userlist-detail', ['userlist' => $userlist,'projectname'=>$projectname]);
    }

    public function add($id)
    {
        // dd($id);
        $userlists = Users::where('idproject','=',$id)->get();
        $projectname = $this->getProjectName($id);

    	return view('userlist.userlist-new', ['userlists' => $userlists,'id'=>$id,'projectname'=>$projectname]);
    }

    public function insert($id, Request $request){

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

        return redirect()->route('userlist.index',['id' => $request->get('idproject')]);
    }
    
    public function edit($id){
        //get post data by id
        $userlist = Users::find($id);
        $projectname = $this->getProjectName($userlist->idproject);
        
        //load form view
        return view('userlist.userlist-edit', ['userlist' => $userlist,'projectname'=>$projectname]);
    }
    
    public function update($id, Request $request){
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

        return redirect()->route('userlist.index', ['id' => $request->get('idproject')]);
    }
    
    public function delete($id){
        //update post data
        $userlist = User::find($id);
        $idproject = $userlist->idproject;
        $userlist->delete();

        //store status message
        // Session::flash('success_msg', 'Post deleted successfully!');

        return redirect()->route('userlist.index',['userlist'=> $idproject]);

    }
}
