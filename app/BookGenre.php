<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookGenre extends Model
{
    //Table name for Library Books Genre
    protected $table = 'library_book_genre';



    /****************************/
    /*      Relationships       */
    /****************************/

    public function genre(){
        return $this->hasOne('\App\Genre', 'id', 'genre_id');
    }

    public function book(){
        return $this->belongsTo('\App\Book');
    }

}
