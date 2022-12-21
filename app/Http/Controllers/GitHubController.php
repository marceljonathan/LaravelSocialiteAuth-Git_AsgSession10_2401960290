<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GitHubController extends Controller
{
    public function redirectToGithub(){
        return Socialite::driver('github')->redirect();
    }

    public function handleGithubCallback(){
        try {
            $user = Socialite::driver('github')->user();
            // dd($user);
            $finduser = User::where('github_id', $user->id)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect()->route('home');
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'github_id' => $user->id,
                    'password' => bcrypt('82kels8n#982bgad82'),
                ]);
                Auth::login($newUser);
                return redirect()->route('home');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
