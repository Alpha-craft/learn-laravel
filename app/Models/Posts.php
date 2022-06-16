<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = [];
    private static $dummy = [
        [
            "nama" => "Ainur",
            "kelas" => "XII-SIJA"
        ],
        [
            "nama" => "Alpha",
            "kelas" => "Global hemka"
        ]
    ];
    public static function test(){
        return collect(self::$dummy);
    }
}
