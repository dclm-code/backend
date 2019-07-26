<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function username(){
        return 'staff_id';
    }

    public function login(Request $req)
    {
        $this->validateLogin($req);

        if ($this->attemptLogin($req)) {
            $user = $this->guard()->user();
            $user->generateToken();
            ($user) ? $user->online = 1 : '';
            $user->save();
            $user['token'] = $user->api_token;
            

            return response()->json([
                'status'=> "success",
                "info" => "Login Successful.",
                "data" => $user,
            ], 200);
        }

        return response()->json([
            "status" => "failed",
            "info" => "Login failed, either staffID or Password invalid."
        ], 400);
    }

    public function logout(Request $reqs)
    {
        $user = Auth::guard('api')->user();
        if ($user) {
            $user->api_token = null;
            $user->online = 0;
            $user->save();

            return response()->json(['message' => 'User logged out.'], 200);
        } else {
            return response()->json(['message' => 'There is an error!'], 400);
        }
    }
}
