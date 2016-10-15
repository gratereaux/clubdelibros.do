<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;
use Socialite;



class SocialController extends Controller
{


    public function __construct(Request $request)
    {
        $this->middleware('guest');
    }

    public function getSocialAuth($provider = null)
    {
        if(!config("services.$provider")) abort('404');

        return Socialite::driver($provider)->redirect();
    }


    public function getSocialAuthCallback($provider = null)
    {
        if($user = Socialite::driver($provider)->user()){
            //dd($user);
            if ($the_user = User::select()->where('email', '=', $user->email)->first()){

                //Autenticate the user if the email is registered
                Auth::loginUsingId($the_user->id);
                return redirect('/');

            }else{

                flash("Aun no tenemos registrada tu cuenta con este correo, completa el formulario colocando un password para tu cuenta. <br/> Al hacer login con facebook o google no necesitaras colocar contraseña al momento de autenticarte");

                return redirect('/register')->with('data', $user);
            }
        }else{

            flash("Ocurrio algun error, intete nuevamente");

            return redirect('/login');
        }

    }
}
