<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */



    public function show($id)
    {
        //Storage::put('tigerTrips.png', $contents, 'public');
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
