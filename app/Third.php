<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Third extends Model
{
    protected $table = 'core_third';

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
