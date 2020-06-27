<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Category;
use App\SubCategory;


class MenusController extends Controller
{

    public function top()
    {
        $menus = Menu::orderBy('created_at', 'desc')->limit(3)->get();
        $categories = Category::orderBy('id', 'asc')->get();
        $sub_categories = [];
        foreach ($categories as $category) {
            $sub = SubCategory::where('category_id', $category->id)->get();
            array_push($sub_categories, $sub);
        }
        return view('menus.top', compact('menus', 'categories', 'sub_categories'));
    }

    public function create()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('menus.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {

        if ($request->isMethod('POST')) {

            $menu = new Menu;
            $menu->title = $request->title;
            // $menu->image = basename($request->image);
            $menu->user_id = auth()->id();

            if ($request->point != null) {
                $menu->point = $request->point;
            }

            if ($request->upbringing != null) {
                $menu->upbringing = $request->upbringing;
            }

            $path = $request->file('image')->store('public/img');
            $menu->image = basename($path);

            $menu->save();
            
        }

        return redirect()->route('top');
    }
}
