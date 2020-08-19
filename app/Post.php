<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    protected $table = 'posts';

    protected $fillable = ['post', 'body', 'users_id'];
        
    public function userId()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeBuscarpor($query, $nombres) {
    	if ($nombres) {
    		return $query->where('post','like',"%$nombres%");
    	}
    }
}
