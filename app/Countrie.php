<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countrie extends Model
{
    protected $fillable = [
        'country', 'users_id'
        ];
        
    public function userId()
    {
        return $this->belongsTo(Countrie::class, 'user_id');
    }
}
