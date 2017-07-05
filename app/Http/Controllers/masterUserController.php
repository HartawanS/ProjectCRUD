<?php

namespace App\Http\Controllers;

use App\MasterUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class MasterUserController extends Controller
{
    public function index(){
        //fetch all posts data
        $Master = MasterUser::orderBy('created_at','desc')->get();
        
        //pass posts data to view and load list view
        return view('home.user', ['Master' => $Master]);
    }

    // public function getList()
    // {
    //     Session::put('product_sort', Input::has('sort') ? Input::get('sort') : (Session::has('product_sort') ? Session::get('product_sort') : 'asc'));
    //     $products = MasterUser::where('name', 'like')->orderBy(Session::get('product_sort'))->paginate(8);
    //     return view('product.list', ['products' => $products]);
    // }

    public function detail($id)
    {
        $MU = MasterUser::find($id);

         return view('home.user-detail', ['MU' => $MU]);
    }

    public function add(){
        //load form view
        return view('home.user-new');
    }

    public function insert(Request $request){
        //validate post data
        $this->validate($request, [
            'name' => 'required',
            'email' => 'bail|required|unique:masteruser',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);
        
        //get post data
        $postData = $request->all();
        
        //insert post data
        MasterUser::create($postData);
        
        //store status message
        // Session::flash('success_msg', 'Post added successfully!');

        return redirect()->route('master.index');
    }
    
    public function edit($id){
        //get post data by id
        $Master = MasterUser::find($id);
        
        //load form view
        return view('home.user-edit', ['Master' => $Master]);
    }
    
    public function update($id, Request $request){
        //validate post data
        $this->validate($request, [
            'name' => 'required',
            'email' => 'bail|required|unique:masteruser',
            'password' => 'required'
        ]);
        
        //get post data
        $postData = $request->all();
        
        //update post data
        MasterUser::find($id)->update($postData);
        
        //store status message
        // Session::flash('success_msg', 'Post updated successfully!');

        return redirect()->route('master.index');
    }
    
    public function delete($id){
        //update post data
        MasterUser::find($id)->delete();
        
        //store status message
        // Session::flash('success_msg', 'Post deleted successfully!');

        return redirect()->route('master.index');
    }
}
