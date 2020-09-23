<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function discord()
    {
        return Socialite::driver('discord')->redirect();
    }

    public function discordRedirect()
    {
        $user = Socialite::driver('discord')->user();

        // if user doesn't exit create new user record else get the model
        $user = User::firstOrCreate([
            'discord_id' => $user->id
        ], [
            'discord_id' => $user->id,
            'username' => $user->nickname,
            'email' => $user->email,
            'avatar' => $user->avatar
        ]);

        Auth::login($user, true);

        return redirect($this->redirectTo);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
