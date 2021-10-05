<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Exports\FileExport;
use App\Imports\FileImport;
use Excel;


class FileController extends Controller
{
    public function __construct(File $file) {
        $this->file = $file;
    }

    public function getPage() {
        $files = $this->file->all();
        return view('files',compact('files'));
    }

    public function submitFile(Request $request) {
        Excel::import(new FileImport,$request->file);
        $lastImport = $this->file->orderBy('created_at','desc')->take(1)->get();
       return back();
    }

    public function exportCSV() {
        return Excel::download(new FileExport,'file.csv');
    }
    
}
