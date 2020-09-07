<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
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
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:normie')->except('logout');
    }

    // the following defines the login for admins

    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'admin']);
        // return view('auth.login', ['url' => 'contents']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            // if user is trying to login then redirect them to contents
            return redirect()->intended('/contents');
            // return redirect()->intended('/contents');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    // the following defines the login for normies

    public function showNormieLoginForm()
    {
        return view('auth.login', ['url' => 'normie']);
    }

    public function normieLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('normie')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/restrictedContents');
            // return redirect()->intended('/normie');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
