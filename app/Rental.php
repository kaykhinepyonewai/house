<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $fillable = [
        'rentalno', 'customer_name', 'phoneno', 'rentalperiod', 'plandate', 'totalprice', 'owner_id' ,'property_id', 'status', 'user_id'
    ];

     public function user($value='')     //appear object ->belongsTo
    {
    	return $this->belongsTo('App\User');

    }

     public function property($value='')     //appear object ->belongsTo
    {
    	return $this->belongsTo('App\Property');

    }
}
