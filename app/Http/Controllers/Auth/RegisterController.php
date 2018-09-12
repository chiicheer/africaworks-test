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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'name_call' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'tel' => 'required|string|max:255|unique:users',
            'birthday' => 'nullable|string|max:255',
            'university_name' => 'nullable|string|max:255',
            'university_degree' => 'nullable|string|max:255',
            'university_date' => 'nullable|string|max:255',
            'master_university' => 'nullable|string|max:255',
            'master_degree' => 'nullable|string|max:255',
            'master_date' => 'nullable|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:255',
            'period' => 'nullable|string|max:255',
            'company_name2' => 'nullable|string|max:255',
            'position2' => 'nullable|string|max:255',
            'period2' => 'nullable|string|max:255',
            // 'role' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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
            'name' => $data['name'],
            'name_call' => $data['name_call'],
            'gender' => $data['gender'],
            'tel' => $data['tel'],
            'birthday' => $data['birthday'],
            'university_name' => $data['university_name'],
            'university_degree' => $data['university_degree'],
            'university_date' => $data['university_date'],
            'master_university' => $data['master_university'],
            'master_degree' => $data['master_degree'],
            'master_date' => $data['master_date'],
            'company_name' => $data['company_name'],
            'position' => $data['position'],
            'period' => $data['period'],
            'company_name2' => $data['company_name2'],
            'position2' => $data['position2'],
            'period2' => $data['period2'],
            // 'role' => $data['role'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
