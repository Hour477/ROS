<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class LoginController extends Controller implements HasMiddleware
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
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            new Middleware('guest', except: ['logout']),
            new Middleware('auth', only: ['logout']),
        ];
    }
    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        $rememberedEmail = Cookie::get('remembered_email');
        $rememberedPassword = Cookie::get('remembered_password');
        return view('auth.login', compact('rememberedEmail', 'rememberedPassword'));
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        if ($request->has('remember')) {
            // Store email and password in cookies for 30 days
            Cookie::queue('remembered_email', $request->email, 30 * 24 * 60);
            Cookie::queue('remembered_password', $request->password, 30 * 24 * 60);
        } else {
            // Forget cookies if not remembered
            Cookie::queue(Cookie::forget('remembered_email'));
            Cookie::queue(Cookie::forget('remembered_password'));
        }

        session()->flash('success', 'Welcome back, ' . $user->name . '! Access granted.');

        return redirect()->intended($this->redirectPath());
    }
}
