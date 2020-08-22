<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $fillable = [
        'rentalno', 'customer_name', 'phoneno', 'rentalperiod', 'plandate', 'totalprice', 'property_id', 'status', 'user_id'
    ];
}
