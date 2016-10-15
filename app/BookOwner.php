<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookOwner extends Model
{
    //Table name for Books Owners
    protected $table = 'library_book_owner';



    /****************************/
    /*      Relationships       */
    /****************************/

    public function user(){
        return $this->hasOne('\App\User', 'id', 'user_id');
    }

    public function book(){
        return $this->belongsTo('\App\Book');
    }
}
