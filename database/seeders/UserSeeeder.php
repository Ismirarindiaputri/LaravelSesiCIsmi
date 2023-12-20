<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facedes\DB;
class UserSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Ismira Rindia Putri",
            'email' => 'ismirarndiaptri@gmail.com',
            'password' => Hash::make('170922'),
        // 'level'=>'admin'
        ]);
    
        //
    }
}
