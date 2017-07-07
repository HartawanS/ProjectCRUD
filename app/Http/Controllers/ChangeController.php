<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ChangeController extends Controller
{
    public function change(){
    	//get post data by id
        // $Master = User::find($id);
        $Master = auth()->user();
        // dd($Master);
        //load form view
        return view('credentials.change-password', ['Master' => $Master]);
    }

    public function update($id, Request $request){
    	//validate post data
        $this->validate($request, [
            'name' => 'required',
            'email' => 'bail|required|unique:masteruser'.($id ? ",id,$id" : ''),
            'password' => 'required'
        ]);
        
        //get post data
        $postData = $request->all();
        
        //update post data
        User::find($id)->update($postData);
        
        //store status message
        // Session::flash('success_msg', 'Post updated successfully!');

        return redirect()->route('master.index');
    }
}
