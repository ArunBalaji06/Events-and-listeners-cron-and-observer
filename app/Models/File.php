<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'email', 'phone'
    ];

    public static function getFile() {
        $files = DB::table('files')->select('id','name','email','phone')->get()->toArray();
        return $files;
    }
}
