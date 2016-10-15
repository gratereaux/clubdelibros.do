<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class FillAllUserData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()){

            //Bring the profile using the id of the Logged user!
            $user_data = User::find(\Auth::user()->id);

            if(empty($user_data->detail->cedula) || empty($user_data->detail->city) || empty($user_data->detail->province) || empty($user_data->detail->sector) || empty($user_data->detail->address) || empty($user_data->detail->image) || empty($user_data->detail->facebook) || ($user_data->detail->country_id == 0) || (count($user_data->third->phone) < 2)) {
                flash('<center><span style="font-size: 18px;">Para poder solicitar o prestar libros, debe registrar y validar <b>todos los datos de tu perfil</b> de usuario.</span> <br/> Haz click en <a href="http://clubdelibros.dev:8000/user/profile">Mi Perfil</a> para actualizar los datos que hagan falta. De lo contrario no podras solicitar ni prestar libros.</center>', 'warning');
            }

        }
        return $next($request);
    }
}
