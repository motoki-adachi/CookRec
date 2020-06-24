<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuMaterial extends Model
{
    protected $fillable = [
        'menu_id',
        'material_id',
        'amount',
        'method',
    ];


    

}
