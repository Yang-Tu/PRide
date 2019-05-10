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
    protected $redirectTo = '/user-page';

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
            'class_year' => ['required', 'integer', 'min:1920'],
            'phone' => ['required','integer', 'min: 1000000000', 'max:9999999999'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'zipcode' => ['required', 'string', 'min:5', 'max:5'],
            'airport' => ['required', 'string'], 
            'd_date' => ['required', 'string'], 
            'd_time'=>  ['required', 'string'], 
            'seats' => ['required', 'string'],
            'pref_service' => ['required', 'string', 'max: 255'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
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
            'class_year' => $data['class_year'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'zipcode' => $data['zipcode'],
            'airport' => $data['airport'],
            'd_date' => $data['d_date'], 
            'd_time'=> $data['d_time'],  
            'seats'=> (int)$data['seats'],  
            'password' => Hash::make($data['password']),
            'pref_service' => $data['pref_service'],
            'eating_club' => $data['eating_club'],
        ]);
    }
}
