<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facedes\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosens')->insert([
            'nidn' => "11223344",
            'nama' => 'Thomson Mery',
            'alamat' => 'Padang',
            'no_hp' => '081268900854',
        ]);

    }
}
