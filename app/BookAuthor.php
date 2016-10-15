<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookAuthor extends Model
{
    //Table name for Library Books Authors
    protected $table = 'library_book_author';

    /****************************/
    /*      Relationships       */
    /****************************/

    public function authorname(){
        return $this->hasOne('\App\Author', 'id', 'author_id');
    }

    public function book(){
        return $this->belongsTo('\App\Book');
    }
}
