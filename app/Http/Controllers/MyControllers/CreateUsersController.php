<?php

namespace App\Http\Controllers\MyControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;

class CreateUsersController extends Controller
{
    public function CreateUsers()
    {
        return view('pages.createusers');
    }

    public function submitCreateUsers(Request $request)
    {
        $this->validate($request, [
            'users_fname' => 'required',
            'users_lname' => 'required'
        ]);
        $user = new Users([
            'users_fname' => $request->get('users_fname'),
            'users_lname' => $request->get('users_lname')
        ]);
        $success = $user->save();
        if($success){
            return redirect('Users')->with('success', 'Data Added');    
        }else{
            return redirect('CreateUsers')->with('fail', 'Oops!');
        }
    }

    public function retrieveInformation()
    {
        $user = Users::all()->toArray();
        return view('pages.users', compact('user'));
    }

    public function editUsersInformation($id)
    {
        $user = Users::find($id);
        return view('pages.edit', compact('user'));   
    }
    public function updateUserInformation(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required'
        ]);
        $adds = array(
            "users_fname" => $request->first_name,
            "users_lname" => $request->last_name
        );
        
        $success = Users::where("id",$request->hdn_id)->update(
            $adds
        );
        if($success){
            return redirect('Users')->with('success', 'Data Updated');    
        }else{
            return redirect('Edit')->with('fail', 'Oops!');
        }
    }

    
}
