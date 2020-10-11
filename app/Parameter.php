<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    protected $fillable = [
        'length',
        'width',
        'height',
        'pier',
        'type',
        'builded',
        'beautiful',
        'strange',
        'famous',
        'bridge_id',
        'idParameter'
    ];
}
