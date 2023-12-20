<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facedes\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'npm' => '2201170067',
            'nama' => 'Ismira Rindia Putri',
            'alamat' => 'Pasaman Timur',
            'no_hp' => '082262134610',
    ]);
    
        //
    }
}
