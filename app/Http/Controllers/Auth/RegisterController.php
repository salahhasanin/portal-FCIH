<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\doctor;
use App\Http\Controllers\Controller;
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
   // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('guest');
    }*/

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'id'   => 'required|numeric|digits_between:8,8',
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'email' => 'required|string|max:255',
            'address' => 'required|string|max:255|min:10',
            'phone' => 'required|numeric|digits_between:8,15',
            'salary' => 'required|numeric|max:50000',
            'birthdate' => 'required|date|date_format:Y-m-d',

        ]);
    }*/

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    /*protected function create(array $data)
    {
        return User::create([
            'id' => $data['id'],
            'name' => $data['name'],
            'password' => bcrypt($data['password'])
        ]);
    }*/

    /*public function createDoctor(array $data)
    {
        return Doctor::create([
            'id' => $data['id'],
            'name' => $data['name'],
            'password' => bcrypt($data['password']),
            'email' =>$data['email'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'salary' => $data['salary'],
            'birthdate' => $data['birthdate'],
            'hiredate' => $data['hirdate'],
            'gender' => $data['gender']
        ]);
    }*/
}
