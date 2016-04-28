<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
	//specify all the fields of the model that you want to be mass-assignable
	protected $fillable = [
    'hotelname',
    'address',
    'price',
    'img',
    ];

    /**
     * Relationship with comment .
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
