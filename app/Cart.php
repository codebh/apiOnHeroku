<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable=[
        'cart_items',
        'total'
    ];
}
