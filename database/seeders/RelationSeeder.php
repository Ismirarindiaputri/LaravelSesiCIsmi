<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facedes\DB;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('relations')->insert([
            'mahasiswa_npm' => "2201170067",
            'dosen_nidn' => '11223344',
            'matakuliah_kode' => '02',
            'status' => 'Y',
        ]);
    
        //
    }
}
