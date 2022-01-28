<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'price',
        'series',
        'sale_date',
        'imgUrl',
        'description',
        'slug',
        'type',
    ];
}
