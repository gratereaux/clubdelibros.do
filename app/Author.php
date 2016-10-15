<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //Table name for Authors
    protected $table = 'core_author';

    /****************************/
    /*      Relationships       */
    /****************************/

    public function third(){
        return $this->hasOne('\App\Third', 'id', 'third_id');
    }

    public function bookauthor(){
        return $this->hasOne('\App\BookAuthor');
    }

}
