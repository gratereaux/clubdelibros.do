<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'core_phone';

     /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'third_id', 'phone_type_id', 'number',
    ];


    /****************************/
    /*      Relationships       */
    /****************************/
    
    public function user(){
        return $this->belongsTo('\App\Third', 'third_id');
    }
}
