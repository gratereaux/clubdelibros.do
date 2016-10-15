<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //Table name for Genres
    protected $table = 'core_genre';

    /****************************/
    /*      Relationships       */
    /****************************/

    public function bookgenre(){
        return $this->belongsTo('\App\BookGenre');
    }
}
