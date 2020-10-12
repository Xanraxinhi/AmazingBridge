<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bridge extends Model
{
    protected $fillable = [
        'name',
        'map',
        'introduce',
        'public',
        'country_id',
        'idBridge'
    ];

    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function parameter(){
        return $this->hasOne(Parameter::class);
    }
    public function photos(){
        return $this->hasMany(Photo::class);
    }
}
