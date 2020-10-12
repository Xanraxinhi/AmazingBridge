<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'introduce'
    ];

    public function photos() {
        return $this->hasManyThrough(Photo::class, Bridge::class);
    }

    public function bridges() {
        return $this->hasMany(Bridge::class);
    }
}
