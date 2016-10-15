<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //Table name for Genres
    protected $table = 'core_language';

    /****************************/
    /*      Relationships       */
    /****************************/

    public function booklangiage(){
        return $this->belongsTo('\App\BookLanguage');
    }
}
