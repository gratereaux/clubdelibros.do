<?php

namespace App;

use App\Http\Requests;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //Table name for users
    protected $table = 'core_users';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'third_id', 'email', 'password', 'user_role_id', 'status_id', 'verified','password_confirmation',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'verified',
    ];

    /****************************/
    /*      Relationships       */
    /****************************/

    public function third(){
        return $this->hasOne('\App\Third', 'id');
    }
    public function role(){
        return $this->hasOne('\App\User_role', 'id');
    }
    public function status(){
        return $this->hasOne('\App\Status', 'id');
    }

    //Faltan otras relaciones con respecto a los libros
    // ...


    /**
     * For search purpose
     */
    public function scopeSearch($query, $name)
    {
        return $query->where('email', 'LIKE', '%'.$email.'%');
    }


    /**
     * Verify if the user have registered roles (admin, registered, moderator)
     * where ID '1' means is regular user, '2' admin and '3' moderator.
    */
    public function isAdministrator()
    {
        if(\Auth::user()->user_role_id == 2){ return true; }
        return false;
    }
    public function isModerator()
    {
        if(\Auth::user()->user_role_id == 3){ return true; }
        return false;
    }


}
