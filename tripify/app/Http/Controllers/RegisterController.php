<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function registerUser(Request $request) 
    {
        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
            'isverified' => true
        ]);  

        Auth::login($user);
        
        return redirect('/');
    }

    public function loginUser(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        dd($user->id);
        if ($user && Hash::check($request->password, $user->password)) {
        
            Auth::login($user);
            dd(auth()->id);
            return redirect('/');
        } else {
            dd(1);
        }
    }

    public function logoutUser()
    {
        Auth::logout();

        return redirect('/');
    }
}
