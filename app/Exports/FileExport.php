<?php

namespace App\Exports;

use App\Models\File;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\withHeadings;

class FileExport implements FromCollection
{

    public function headings():array{
        return[
            'Id',
            'Name',
            'Email',
            'Phone',
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return File::all();
        return collect(File::getFile());
    }
}
