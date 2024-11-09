<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show($user)
    {   
        $user = \App\Models\User::findOrFail($user);
        // Check if the user is authenticated and not an admin
        if (Auth::check() && $user->role !== 'admin') {
            return view('profile/profile',['user'=> $user]);
            // dd("you are buyer");
        }

        // Use dd() for debugging
        // dd("you are admin");
        return view('profile/profile', ['user' => $user]);
    }
}
