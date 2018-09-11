<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'name', 'address', 'website','email','phone','bio','user_id'
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
