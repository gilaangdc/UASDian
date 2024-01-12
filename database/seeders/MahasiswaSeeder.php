<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'npm' => "532421033",
            'nama' => 'Nurdian Pomalo',
            'alamat' => 'Gunung Pangilun',
            'no_hp' => '082196206817',
        ]); 
    }
}
