<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Mail\ConfirmationEmail;
use Illuminate\Support\Facades\Mail;

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
            'staff_id' => ['required', 'string', 'max:50', 'unique:users'],
            'first_name' => ['required', 'string', 'max:15'],
            'surname' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender' => ['required', 'string'],
            'phone_number' => ['required', 'string', 'min:9', 'max:15', 'unique:users'],
            'date_of_birth' => ['required', 'date'],
            'date_of_employment' => ['required', 'date'],
            'role' => ['required', 'string'],
            'middle_name', 'section_id','department_id',
            'qualification_id','location_of_work_id',
            'location_of_origin_id','grade_level_id'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  Request $req
     * @return \App\User
     */
    protected function create(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        $user = User::create(['staff_id'=>$data['staff_id'],
        'first_name'=>$data['first_name'],
        'middle_name'=>$data['middle_name'],
        'surname'=>$data['surname'],
        'email'=>$data['email'],
        'password'=>$data['password'],
        'password_confirmation'=>$data['password_confirmation'],
        'gender'=>$data['gender'],
        'phone_number' => $data['phone_number'],
        'date_of_birth'=>date("Y-m-d", strtotime($data['date_of_birth'])),
        'section_id'=>$data['section_id'],
        'department_id'=>$data['department_id'],
        'location_of_work_id'=>$data['location_of_work_id'],
        'location_of_origin_id'=>$data['location_of_origin_id'],
        'qualification_id'=>$data['qualification_id'],
        'date_of_employment'=>date("Y-m-d", strtotime($data['date_of_employment'])),
        'grade_level_id'=>$data['grade_level_id'],
        'marital_status'=>$data['marital_status'],
        'home_address'=>$data['home_address'],
        'role'=>$data['role']]);
        $msg = array("status" => "success", "info" => "created successfully.");
        return $user;
    }

    protected function registered(Request $req, $user)
    {
        $user->generateToken();
        //Mail::to($user->email)->send(new ConfirmationEmail($user));

        //return response()->json(['data' => $user->toArray()], 201);
        return response()->json(['status'=>'success', 'info'=>'Staff/user account created successfully.'], 201);
    }
}
