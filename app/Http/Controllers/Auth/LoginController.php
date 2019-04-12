<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $userGithub = Socialite::driver('github')->user();


        // Add User to DB
        $user = User::where('provider_id',$userGithub->getId())->first();

        if(!$user){ // Si el usuario no existe

            $user = new User();

            $user->provider_id = $userGithub->getId();
            $user->email = $userGithub->getEmail();
            $user->name = $userGithub->getName();
            $user->nickname = $userGithub->getNickname();
            $user-> avatar_img = $userGithub->getAvatar();
        }

        // Login User
        Auth::login($user,true);

        return redirect($this->redirectTo);
    }
}
