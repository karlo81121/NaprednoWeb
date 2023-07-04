<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Interfaces\IRoles;
use App\Models\User;
use App\Models\Roles;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registerUser(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => config('enums.roles.USER'),
            'isverified' => true
        ]);

        if (is_null($user)) {
            return response('Error registering user!', 500);
        }

        Auth::login($user);

        return redirect('/');
    }

    public function registerAgency(Request $request)
    {
        //dd($request);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'description' => $request->description,
            'role_id' => config('enums.roles.AGN'),
            'picture' => $request->imageurl,
            'isverified' => true
        ]);

        if (is_null($user)) {
            return response('Error registering user!', 500);
        }

        Auth::login($user);

        return redirect('/');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        
        if (is_null($user)) {
            return response('No such user in database :(', 404);
        }

        if (!Hash::check($request->password, $user->password)) {
            return response('Wrong password :(', 403);
        }
        
        Auth::login($user);

        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    //If necessary for administrator
    public function getAllUsers()
    {
        $users = User::all();
        $roles = $this->getAllRoles();
        return view('users', compact('users', 'roles'));
    }

    //General method for user/agency 
    public function acquireRoleToUser(Request $request)
    {
        $user = User::find($request->input('id'));
        $user->__set('role', $request->role);
        $user->save();

        return redirect('/dashboard');
    }

    //General fetch of user details (no matter of given role)
    public function getUserById()
    {
        $user = User::find(auth()->user()->id);

        return view('user-profile', compact('user'));
    }

    //Agency methods
    public function getAgencyDetails($id)
    {
        $agency = User::find($id);

        return view('agency-details', compact('agency'));
    }


    //Admin methods
    public function getAllUsersForUpdate()
    {
        $updateUsers = User::all();
        $roles = $this->getAllRoles();
        return view('updateusers', compact('updateUsers', 'roles'));
    }

    public function findUserForUpdate($id)
    {
        $userForUpdate = User::find($id);

        return view('edituser', compact('userForUpdate'));
    }

    public function updateUser(Request $request)
    {
        $userForUpdate = User::find($request->input('id'));

        $userForUpdate->name = $request->name;
        $userForUpdate->surname = $request->surname != "" ? $request->surname : null;
        $userForUpdate->email = $request->email;
        $userForUpdate->password = $request->password;
        $userForUpdate->description = $request->description != "" ? $request->description : null;
        $userForUpdate->role_id = $request->role_id;
        $userForUpdate->isverified = $request->isverified;

        $userForUpdate->save();

        return redirect('/updateusers');
    }

    public function deleteUser(Request $request)
    {
        $userForDelete = User::find($request->input('id'));

        $userForDelete->delete();

        return redirect('/updateusers');
    }

    private function getAllRoles()
    {
        $roles = Roles::all();

        return $roles;
    }
}
