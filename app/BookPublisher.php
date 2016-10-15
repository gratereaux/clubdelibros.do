<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookPublisher extends Model
{
    //Table name for Library Books
    protected $table = 'core_publisher';



    /****************************/
    /*      Relationships       */
    /****************************/

    public function third(){
        return $this->hasOne('\App\Third', 'id', 'third_id');
    }

    public function book(){
        return $this->belongsTo('\App\Book');
    }
}
