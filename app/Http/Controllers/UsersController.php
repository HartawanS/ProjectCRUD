<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Project;
use App\User;
class UsersController extends Controller
{    
	  public function index($id){
	  	// dd($id);
        //fetch post data
        $userlists = Users::where('idproject','=',$id)->get();
        $user = User::where('id','=',$id)->get();
        $projectname =  $this->getProjectName($id);
        //pass posts data to view and load list view
        return view('userlist.userlist', ['userlists' => $userlists,'id'=>$id, 'projectname'=>$projectname, 'user'=>$user]);
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
        $Master = User::orderBy('created_at','desc')->get();
        // dd($Master);
    	return view('userlist.userlist-new', ['userlists' => $userlists, 'id'=>$id, 'projectname'=>$projectname, 'Master' => $Master]);
    }

    public function insert($id, Request $request){
    	// dd($request->iduser);
        //validate post data
        $this->validate($request, [
        	'idproject'=>'required',
            'iduser' => 'required|unique:userlist'
        ]);
        
        //get post data
        $postData = $request->all();
        
        //insert post data
        Users::create($postData);
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
