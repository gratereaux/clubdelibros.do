<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_role extends Model
{
	protected $table = 'core_user_role';

     /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'name',
    ];


    /****************************/
    /*      Relationships       */
    /****************************/
    
    public function user(){
        return $this->belongsTo('\App\User');
    }
}
