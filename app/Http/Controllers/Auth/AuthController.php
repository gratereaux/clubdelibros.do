<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Third;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests\UserRequest;
use Laracasts\Flash\Flash;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/'; //redirect to myAccount when exist

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function register(UserRequest $request)
    {
        //Validacion de passowrd en el UserRequest no quiere confirmar 
        // solucion momentanea alterna para evitar este error
        // necesita refactorizacion
        if ($request->password != $request->password_confirmation){
            Flash::error("Password do not match!");
            return redirect('register');
        }
        
        $third = Third::create([
            'name' => $request['name'],
            //'other stuff to add' => Right here,
        ]);

        $newUser = User::create([
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'third_id' => $third->id,
            'user_role_id' => 1, // ID 1 = regular user // ID 2 = Administrator // ID 3 = Moderator 
            'status_id' => 1, //Normal status for the begining
            'verified' => 0, //not verified by default
        ]);

        Flash::success("El usuario ". $newUser->third->name ." ha sido registrado. Puede hacer login y luego validar sus datos");
        return redirect('login');
    }
}
