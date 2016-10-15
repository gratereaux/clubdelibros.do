<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'core_usersdetails';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'instagram', 'twitter', 'facebook', 'image',
    ];

    protected $hidden = [
    	'id', 'third_id',
    ];

    /****************************/
    /*      Relationships       */
    /****************************/
    
    public function user(){
        return $this->belongsTo('\App\User');
    }

    public function country(){
        return $this->hasOne('\App\Country', 'id', 'country_id');
    }
}
