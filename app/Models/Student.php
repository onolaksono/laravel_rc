<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // isi dengan nama table
    // primary keynya adalah id_barang
    protected $table = 'students';

    // protected $primaryKey = 'nis';
    // public $incrementing = false;
    protected $fillable = [
        'nama_siswa',
        'gender',
        'nis',
        'class_id'
    ];
}
