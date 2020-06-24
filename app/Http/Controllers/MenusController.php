<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Category;
use App\SubCategory;


class MenusController extends Controller
{

    public function top(){
        $menus = Menu::orderBy('created_at', 'desc')->get();
        $categories = Category::orderBy('id', 'asc')->get();
        $sub_categories = [];
        foreach($categories as $category){
            $sub = SubCategory::where('category_id', $category->id)->get();
            array_push($sub_categories, $sub);
        }
        return view('menus.top', compact('menus', 'categories', 'sub_categories'));
    }

    public function create(){
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('menus.create', ['categories' => $categories]);
    }
}
