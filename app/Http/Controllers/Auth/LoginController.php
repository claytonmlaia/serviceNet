<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
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


    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function handleProviderCallback()
    {
        $providerUser = Socialite::driver('facebook')->user();
        // dd($providerUser->getName());
        // dd($providerUser);

        $user = User::firstOrCreate(['email' => $providerUser->getEmail()], [
            'name' => $providerUser->getName() ?? $providerUser->getNickname(),
            'provider_id' => $providerUser->getId(),
            'provider' => 'facebook',
        ]);

        Auth::login($user);
        return redirect($this->redirectTo);
    }
}
