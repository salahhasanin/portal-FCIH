<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Symfony\Component\HttpFoundation\Request;
use App\User;
use App\stuff;

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
    public function username()
    {
        return 'id';
    }
    

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected function authenticated(Request $request)
    {
        
            $user = User::select('userType')->where('id',$request->input('id'))->first();

            if ( $user['userType'] == "admin" ) {

                return redirect('admin');

            }elseif ($user['userType'] == "student"){

                return redirect('student');

            }elseif ($user['userType'] == "doctor"){

                return redirect('doctor');

            }elseif ($user['userType'] == "stuff"){

                $stuff = stuff::select('work_type')->where('stuff_id',$request->input('id'))->first();

                if  ($stuff['work_type'] == "student affairs"){

                    return redirect('studentAffairs');

                }else{

                    return redirect('control');

                }

            }else {

                //instructor view

            }

                return redirect('login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
