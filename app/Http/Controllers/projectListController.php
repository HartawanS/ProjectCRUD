<?php

namespace App\Http\Controllers;
use App\Projectlist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class projectListController extends Controller
{
    public function index(){
        //fetch all posts data
        $projectlists = projectlist::orderBy('created_at','desc')->get();
        
        //pass posts data to view and load list view
        return view('project.project', ['projectlists' => $projectlists]);
    }
    
    public function details($id){
        //fetch post data
        $projectlist = projectlist::find($id);
        
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
            'project-name' => 'required'
        ]);
        
        //get post data
        $postData = $request->all();
        
        //insert post data
        projectlist::create($postData);
        
        //store status message
        Session::flash('success_msg', 'Post added successfully!');

        return redirect()->route('project.project');
    }
    
    public function edit($id){
        //get post data by id
        $projectlist = projectlist::find($id);
        
        //load form view
        return view('project.project-edit', ['projectlist' => $projectlist]);
    }
    
    public function update($id, Request $request){
        //validate post data
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        
        //get post data
        $postData = $request->all();
        
        //update post data
        projectlist::find($id)->update($postData);
        
        //store status message
        Session::flash('success_msg', 'Post updated successfully!');

        return redirect()->route('project.project');
    }
    
    public function delete($id){
        //update post data
        projectlist::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Post deleted successfully!');

        return redirect()->route('project.project');
    }

      
}
