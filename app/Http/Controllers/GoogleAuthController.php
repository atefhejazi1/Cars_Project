<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callbackGoogle()
    {

        try {
        
            $user = Socialite::driver('google')->user();
         
            $finduser = User::where('google_id', $user->id)->first();
         
            if($finduser){
         
                Auth::login($finduser);
        
                return redirect()->intended('dashboard');
         
            }else{
                $newUser = User::updateOrCreate(['email' => $user->email],[
                        'name' => $user->name,
                        'google_id'=> $user->id,
                        'password' => encrypt('123456dummy')
                    ]);
         
                Auth::login($newUser);
        
                return redirect()->intended('dashboard');
            }
        
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    
    }
}
