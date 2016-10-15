<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookStatus extends Model
{
    protected $table = 'library_book_status';

    /****************************/
    /*      Relationships       */
    /****************************/

    public function book(){
        return $this->belongsTo('\App\Book');
    }

    public function status(){
        return $this->hasOne('\App\Status', 'id', 'status_id');
    }

}
