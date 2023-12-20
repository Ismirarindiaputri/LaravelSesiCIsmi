<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $fillable = [
        'npm' =>'2201170067',
        'nama' =>'Ismira Rindia Putri',
        'alamat' =>'Pasaman Timur',
        'no_hp' =>'082262134610',
    ];
}
