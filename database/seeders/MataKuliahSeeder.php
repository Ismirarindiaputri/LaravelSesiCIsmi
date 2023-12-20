<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facedes\DB;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matakuliahs')->insert([
            'kode_mk' => "02",
            'nama_mk' => 'Mobile Computing',
            'sks' => '3',
            'semester' => '3',
    ]);
    
        //
    }
}
