<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    // protected $table = 'table_users';   vali b khatr esm pizza khodesh mifhm
    protected $casts = [
        'toppings' => 'array'
    ];
}
