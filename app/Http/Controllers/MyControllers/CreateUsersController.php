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

    
}
