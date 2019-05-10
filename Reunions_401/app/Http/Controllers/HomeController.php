<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $id = Auth::id();

        return view('user.profile', ['user' => User::findOrFail($id)]);

    }

    public function notifications()
    {
        $user = Auth::user();
        $id = Auth::id();

        return view('user.notifications', ['user' => User::findOrFail($id)]);

    }

    public function settings()
    {
        $user = Auth::user();
        $id = Auth::id();

        return view('user.settings', ['user' => User::findOrFail($id)]);

    }

    public function showLogin()
    {
        // show the form
        return View::make('login');
    }

    public function doLogin()
    {
    // process the form
    }

   
    }
    
