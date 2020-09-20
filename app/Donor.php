<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'blood_group'
    ];

}
