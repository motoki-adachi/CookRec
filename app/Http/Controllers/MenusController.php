<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Category;


class MenusController extends Controller
{

    public function top(){
        $menus = Menu::orderBy('created_at', 'desc')->get();
        return view('menus.top', ['menus' => $menus]);
    }

    public function create(){
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('menus.create', ['categories' => $categories]);
    }
}
