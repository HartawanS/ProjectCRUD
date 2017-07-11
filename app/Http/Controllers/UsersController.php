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
        // $iduser = auth()->user()->id;
        // if(restrict($iduser, $id) == false){
        //     return redirect()->route('home');
        // }
        $userlists = User::join('userlist','users.id','=','iduser')
                    ->where('idproject',$id)
                    ->get();
        //dd($userlists);
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
        if(restInPiece($id) == false){
            return redirect()->route('home');
        }
        $userlists = Users::find($id);
        $userlist = User::find($userlists->iduser);

        $projectname = $this->getProjectName($userlists->idproject);

         return view('userlist.userlist-detail', ['id'=> $id,'userlist' => $userlist,'projectname'=>$projectname,'userlists' => $userlists]);
    }

    public function add($id)
    {
        // $iduser = auth()->user()->id;
        // if(restrict($iduser, $id) == false){
        //     return redirect()->route('home');
        // }
        $userlists = Users::where('idproject','=',$id)->get();
        $projectname = $this->getProjectName($id);
        $idUserLists = array_pluck($userlists, 'iduser');
        $Master = User::whereNotIn('id', $idUserLists)->get();
    	return view('userlist.userlist-new', ['userlists' => $userlists, 'id'=>$id, 'projectname'=>$projectname, 'Master' => $Master]);
    }

    public function insert($id, Request $request){
        // $iduser = auth()->user()->id;
        // if(restrict($iduser, $id) == false){
        //     return redirect()->route('home');
        // }

        $this->validate($request, [
        	'idproject'=>'required',
            'iduser' => 'required'
        ]);
        
        foreach($request->input('iduser') as $value){
            $idproject = $request['idproject'];
            $iduser = $value;
            $user = new Users();
            $user->idproject = $idproject;
            $user->iduser = $iduser;
            $user->save();
        }
        return redirect()->route('userlist.index',['id' => $request->get('idproject')]);
    }
    
    // public function edit($id){
    //     //get post data by id

    //      $Master = User::find($id);
        
    //     //load form view
    //     return view('userlist.userlist-edit', ['Master' => $Master]);
    // }
    
    // public function update($id, Request $request){
    //     //validate post data
    //     $this->validate($request, [
    //     	'idproject'=>'required',
    //         'type' => 'bail',
    //         'note' => 'required',
    //         'link_file_APK' => 'required'
    //     ]);
        
    //     //get post data
    //     $postData = $request->all();
        
    //     //update post data
    //     Build::find($id)->update($postData);
        
    //     //store status message
    //     // Session::flash('success_msg', 'Post updated successfully!');

    //     return redirect()->route('userlist.index', ['id' => $request->get('idproject')]);
    // }
    
    public function delete($id){
        
        //update post data
        $userlist = Users::find($id);
        $idproject = $userlist->idproject;
        $userlist->delete();

        //store status message
        // Session::flash('success_msg', 'Post deleted successfully!');

        return redirect()->route('userlist.index',['userlist'=> $idproject]);

    }
}
