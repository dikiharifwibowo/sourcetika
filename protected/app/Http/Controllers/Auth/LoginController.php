<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


use Auth;
use Socialite;
use App\User;
use Validator;


use Illuminate\Http\Request;
use App\Http\Requests;


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
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);

        return redirect()->back();
    }

    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $fbUser
     * @return User
     */
    private function findOrCreateUser($fbUser)
    {

        if ($authUser = User::where('facebook_id', $fbUser->id)->first()) {
            return $authUser;
        }

        return User::create([
            'name' => $fbUser->name,
            'email' => $fbUser->email,
            'facebook_id' => $fbUser->id,
            'avatar' => $fbUser->avatar
        ]);

    }
    // private function findOrCreateUser($provideruser,$providername)
    // {
    //     $authUser = User::where('email', $provideruser->getEmail())->first();
 
    //     if ($authUser){
    //         return $authUser;
    //     }
 
    //     return User::create([
    //         'name' => $provideruser->name,
    //         'email' => $provideruser->getEmail(),
    //         'social_id' => $provideruser->getId(),
    //     'social_provider' => $providername,
    //         'avatar' => $provideruser->getAvatar()
    //     ]);
    // }
}
