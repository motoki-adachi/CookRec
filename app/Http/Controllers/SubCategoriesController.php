<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\MaterialsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class SubCategoriesController extends Controller
{
    public function import() 
    {
        Excel::import(new MaterialsImport, '/Applications/MAMP/htdocs/CookRec/csv/sub-category.csv');
        
        return redirect('/')->with('success', 'All good!');
    }
}