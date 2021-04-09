<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;    

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
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginFormUsers()
    {
       return view('admin.auth.login') ;
    }

    protected function redirectTo(){

        return route('admin.index');
    
    }

    public function checkLogin(Request $request)
    {
        $validator = $request->validate([
            'email'     => 'required',
            'password'  => 'required|min:6'
        ]);
        if (\Auth::attempt($validator)) {
            return redirect()->route('admin.index');
        }
        return redirect()->back()->withErrors(['email'=>'Not right', 'password'=> 'Not right']);
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/');
    }

    public function showSignUpFormUsers()
    {
        return view('admin.auth.register');
    }

    public function signup(Request $request)
    {
        $validator = $request->validate([
            'name'      => 'required|min:1',
            'email'     => 'required',
            'password'  => 'required|min:6'
          ]);
  
          User::create($validator);
  
          return redirect('/admin/login');
    }
}
