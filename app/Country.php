<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'core_country';

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

    public function userdetai(){
        return $this->belongsTo('\App\UserDetail');
    }
}
