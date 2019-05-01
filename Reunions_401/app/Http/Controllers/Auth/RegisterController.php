<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function formatValidationErrors(Validator $validator)
    {
    return $validator->errors()->all();
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'age' => ['REQUIRED', 'integer', 'max:120'],
            'phone' => ['required','integer', 'min: 1000000000', 'max:9999999999'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'Origin' => ['required', 'string', 'max:255'],
            'Destination' => ['required', 'string', 'max:255'],
            'd_date' => ['required', 'string'], 
            'd_time'=>  ['required', 'string'], 
            'seats' => ['required', 'min: 0', 'max: 20'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'age' => $data['age'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'Origin' => $data['Origin'],
            'Destination' => $data['Destination'],
            'd_date' => $data['d_date'], 
            'd_time'=> $data['d_time'],  
            'seats'=> $data['seats'],  
            'password' => Hash::make($data['password']),
        ]);
    }
}
