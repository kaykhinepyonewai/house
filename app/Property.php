<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'codeno', 'name', 'mainphoto','inphoto','roomphoto','pricepermonth','category_id', 'township_id', 'bedroom_qty', 'bathroom_qty','volume','owner_name','user_id','address','description','status'
    ];
}
