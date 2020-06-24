<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'title',
        'image',
        'user_id',
        'point',
        'upbringing'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function materials()
    {
        return $this->belongsToMany('App\Material', 'menu_material', 'menu_id', 'material_id');
    }
}