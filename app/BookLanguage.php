<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookLanguage extends Model
{
    //Table name for Library Books Genre
    protected $table = 'library_book_language';



    /****************************/
    /*      Relationships       */
    /****************************/

    public function language(){
        return $this->hasOne('\App\Language', 'id', 'language_id');
    }

    public function book(){
        return $this->belongsTo('\App\Book');
    }
}
