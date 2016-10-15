<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Third extends Model
{
    protected $table = 'core_third';

     /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'third_id', 'ebook', 'publisher_id', 'published', 'description',
    ];


    /****************************/
    /*      Relationships       */
    /****************************/
    
    public function user(){
        return $this->belongsTo('\App\User');
    }

    public function book(){
        return $this->belongsTo('\App\Book');
    }

    public function phone(){
        return $this->hasMany('\App\Phone', 'third_id');
    }

    public function publisher(){
        return $this->belongsTo('\App\BookPublisher');
    }

    public function author(){
        return $this->belongsTo('\App\Author');
    }
    
}
