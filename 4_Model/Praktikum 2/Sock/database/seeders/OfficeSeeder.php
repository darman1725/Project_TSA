<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 
class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// insert data ke table office
        DB::table('office')->insert([
        	'nama' => 'SOCK Cabang - Medan',
        	'alamat' => 'Jl Sudirman No 22, Medan',
        	'kontak' => '082196360193',
        	'tahun' => 2022
        ]);

        DB::table('office')->insert([
        	'nama' => 'SOCK Cabang - Aceh',
        	'alamat' => 'Jl Ahmad No 10, Aceh',
        	'kontak' => '088741092393',
        	'tahun' => 2018
        ]);

        DB::table('office')->insert([
        	'nama' => 'SOCK Cabang - Riau',
        	'alamat' => 'Jl Diaul No 14, Riau',
        	'kontak' => '081209872345',
        	'tahun' => 2020
        ]);

        DB::table('office')->insert([
        	'nama' => 'SOCK Cabang - Palembang',
        	'alamat' => 'Jl Frans No 45, Palembang',
        	'kontak' => '082345671234',
        	'tahun' => 2021
        ]);

        DB::table('office')->insert([
        	'nama' => 'SOCK Cabang - Lampung',
        	'alamat' => 'Jl Semanggi No 7, Lampung',
        	'kontak' => '081298761231',
        	'tahun' => 2019
        ]);
        
        DB::table('office')->insert([
        	'nama' => 'SOCK Cabang - Banten',
        	'alamat' => 'Jl Asia No 9, Banten',
        	'kontak' => '081098762341',
        	'tahun' => 2015
        ]);

        DB::table('office')->insert([
        	'nama' => 'SOCK Cabang - Solo',
        	'alamat' => 'Jl Sutami No 18, Solo',
        	'kontak' => '082196542312',
        	'tahun' => 2017
        ]);

        DB::table('office')->insert([
        	'nama' => 'SOCK Cabang - Poso',
        	'alamat' => 'Jl Kerta No 48, Poso',
        	'kontak' => '082123423423',
        	'tahun' => 2020
        ]);
    }
}