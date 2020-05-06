<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comments';

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function weed(){
        return $this->belongsTo('App\Weed', 'weed_id');
    }

    // public function likes(){
    //     return $this->hasMany('App\Like');
    // }

    
}
