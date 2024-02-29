<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->insert([
            'name' => 'HellCleaning',
            'address' => 'Cursed Soul Avenue, 66.9',
            'city' => 'Helldoors',
            'country' => 'Australia',
            'contact_id' => 1,
        ]);
        DB::table('suppliers')->insert([
            'name' => 'PulcraSA',
            'address' => 'C/ Huertalo, 16',
            'city' => 'Madrid',
            'country' => 'España',
            'contact_id' => 2,
        ]);
        DB::table('suppliers')->insert([
            'name' => 'Parafarmasa',
            'address' => 'Av. Estudiantes, 45',
            'city' => 'Zaragoza',
            'country' => 'España',
            'contact_id' => 3,
        ]);
    }
}
