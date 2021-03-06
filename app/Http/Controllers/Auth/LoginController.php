<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Notifications\VerifyRegistration;
use App\Models\User;
use Illuminate\Http\Request;

use Auth;
use Alert;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
     public function login(Request $request)
      {
        $this->validate($request, [
          'email' => 'required|email',
          'password' => 'required',
        ]);

        //Find User by this email
        $user = User::where('email', $request->email)->first();

        if ($user->status == 1) {
          // login This User

          if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Log Him Now
            return redirect()->intended(route('index'));
          }else {
             Alert::toast('Invalid Login', 'errors');
            return redirect()->route('login');
          }
        }else {
          // Send him a token again
          if (!is_null($user)) {
            $user->notify(new VerifyRegistration($user));

             Alert::toast('A New confirmation email has sent to you.. Please check and confirm your email', 'success');
            return redirect('/');
          }else {

            Alert::toast('Please login first !!', 'sticky_error');
            return redirect()->route('login');
          }
        }

      }
}
