<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\MaterialsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class MaterialsController extends Controller
{
    public function import() 
    {
        Excel::import(new MaterialsImport, '/Applications/MAMP/htdocs/CookRec/data.csv');
        
        return redirect('/')->with('success', 'All good!');
    }
}
