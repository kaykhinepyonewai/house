<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Township extends Model
{
    protected $fillable = [
        'name',
    ];

    public function properties()
    {
    	return $this->hasMany('App\Property');
    }
}
