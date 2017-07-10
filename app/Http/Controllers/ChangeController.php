<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
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
    	$data = User::find($id);
    	$input = $request->all();
    	// dd(Hash::check());
        if( ! Hash::check( $input['oldpassword'] , $data->password) )
		{
			dd('Return error with current passowrd is not match.');
    		return redirect()->route('changepassword');
		}

    	//validate post data
        $this->validate($request, [
            'oldpassword' => 'required',
            'newpassword' => 'required|different:oldpassword|confirmed',
            // 'confpassword' => 'required|same:newpassword'
        ]);
        // dd($request['newpassword']);
        // User::up([
        //     'password' => bcrypt($request['newpassword'])
        //     ]);
        $data->password = bcrypt($request['newpassword']);
        $data->save();

        return redirect()->route('master.index');
    }
    public function change_profile()
    {
        $Master = auth()->user();

        //load form view
        return view('credentials.change-profile', ['Master' => $Master]);
    }
    public function update_profile($id, Request $request)
    {
        
        $this->validate($request, [
            'name' => 'bail|required',
            'email' => 'bail|required|unique:users'.($id ? ",id,$id" : ''),
            'type' => 'bail'
            ]);
        //get post data
        $postData = $request->all();
        
        //update post data
        User::find($id)->update($postData);
        $Master = auth()->user();
        return redirect()->route('changeprofile', ['Master' => $Master]);
    }
}
