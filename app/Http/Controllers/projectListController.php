<?php

namespace App\Http\Controllers;
use App\Project;
use App\Build;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class ProjectListController extends Controller
{
    public function index(){
        //fetch all posts data
        $projectlists = Project::orderBy('created_at','desc')->get();
        
        //pass posts data to view and load list view
        return view('project.project', ['projectlists' => $projectlists]);
    }
    
    public function details($id){
        //fetch post data
        $projectlist = Project::find($id);
        
        //pass posts data to view and load list view
        return view('project.details', ['projectlist' => $projectlist]);
    }
    
    public function add(){
        //load form view
        return view('project.project-new');
    }
    
    public function insert(Request $request){
        //validate post data
        $this->validate($request, [
            'name' => 'bail|required|unique:projectlist'
        ]);
        
        //get post data
        $postData = $request->all();
        
        //insert post data
        Project::create($postData);
        
        //store status message
        // Session::flash('success_msg', 'Post added successfully!');

        return redirect()->route('home');
    }
    
    public function edit($id){
        //get post data by id
        $projectlist = Project::find($id);
        
        //load form view
        return view('project.project-edit', ['projectlist' => $projectlist]);
    }
    
    public function update($id, Request $request){
        //validate post data
        $this->validate($request, [
            'name' => 'bail|required|unique:projectlist'
        ]);
        
        //get post data
        $postData = $request->all();
        
        //update post data
        Project::find($id)->update($postData);
        
        //store status message
        // Session::flash('success_msg', 'Post updated successfully!');

        return redirect()->route('home');
    }
    
    public function delete($id){
        //update post data
        Project::find($id)->delete();
        Build::where('idproject','=',$id)->delete();
        //store status message
        // Session::flash('success_msg', 'Post deleted successfully!');

        return redirect()->route('home');
    }

      
}
