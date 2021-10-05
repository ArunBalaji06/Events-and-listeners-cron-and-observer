<?php

namespace App\Imports;

use App\Models\File;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withHeadingRow;

class FileImport implements ToModel,withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new File([
            'name' => $row['name'],
            'email' => $row['email'],
            'phone' => $row['phone'],
        ]);
    }
}
