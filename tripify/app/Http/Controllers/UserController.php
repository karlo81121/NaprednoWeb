<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Roles;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUsers(){
        $users = User::all();
        return view('users', compact('users'));
    }

    //General method for user/agency 
    public function acquireRoleToUser(Request $request){
        $user = User::find($request->input('id'));
        $user->__set('role', $request->role);
        $user->save();

        return redirect('/dashboard'); 
    }

    //General fetch of user details (no matter of given role)
    public function getUserById(){
        $user = User::find(auth()->user()->id);

        return view('user-profile', compact('user'));
    }

    //Agency methods
    public function getAgencyDetails($id){
        $agency = User::find($id);

        return view('agency-details', compact('agency'));
    }



    //Admin methods
    public function getAllUsersForUpdate(){
        $updateUsers = User::all();
        $roles = Roles::all();
        return view('updateusers', compact('updateUsers', 'roles'));
    }

    public function findUserForUpdate($id){
        $userForUpdate= User::find($id);

        return view('edituser', compact('userForUpdate'));
    }

    public function updateUser(Request $request){
        $userForUpdate = User::find($request->input('id'));
        
        $userForUpdate->name = $request->name;
        $userForUpdate->surname = $request->surname != "" ? $request->surname : null;
        $userForUpdate->email = $request->email;
        $userForUpdate->password = $request->password;
        $userForUpdate->description = $request->description != "" ? $request->description : null;
        $userForUpdate->role_id = 
        $userForUpdate->isverified = $request->isverified;

        $userForUpdate->save();

        return redirect('/updateusers');
    }

    public function deleteUser(Request $request){
        $userForDelete = User::find($request->input('id'));

        $userForDelete->delete();

        return redirect('/updateusers');
    }

}