<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'name'
    ];

}
