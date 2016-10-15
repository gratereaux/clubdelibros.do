<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //Table name for Library Books
    protected $table = 'library_book';

    


    /****************************/
    /*      Relationships       */
    /****************************/

    public function third(){
        return $this->hasOne('\App\Third', 'id', 'third_id');
    }

    public function bookpublisher(){
        return $this->hasOne('\App\BookPublisher', 'id', 'publisher_id');
    }

    public function bookauthor(){
        return $this->hasOne('\App\BookAuthor');
    }

    public function bookowner(){
        return $this->hasOne('\App\BookOwner', 'book_id', 'id');
    }

    public function bookgenre(){
        return $this->hasOne('\App\BookGenre', 'book_id', 'id');
    }

    public function bookstatus(){
        return $this->hasOne('\App\BookStatus', 'book_id', 'id');
    }

    public function booklanguage(){
        return $this->hasOne('\App\BookLanguage', 'book_id', 'id');
    }
}
