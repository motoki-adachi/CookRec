<?php

namespace App\Imports;

use App\Material;
use Maatwebsite\Excel\Concerns\ToModel;

class MaterialsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Material([
            'id'     => $row[0],
            'name'    => $row[1], 
        ]);
    }
}
