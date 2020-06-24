<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'name',
    ];

    public function menus()
    {
        return $this->belongsToMany('App\Menu', 'menu_material', 'material_id', 'menu_id');
    }
}
