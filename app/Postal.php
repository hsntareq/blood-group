<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postal extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'district_id', 'name', 'code'
    ];

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
