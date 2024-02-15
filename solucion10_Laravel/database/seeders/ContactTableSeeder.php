<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'name' => 'John',
            'surname' => 'Dirt',
            'email' => 'jdirt@hellcleaning.com',
            'phone_number' => '+61542215846',
            'supplier_id' => 1,
        ]);
        DB::table('contacts')->insert([
            'name' => 'Juan',
            'surname' => 'Sánchez Lázaro',
            'email' => 'jsanchezl@pulcrasa.com',
            'phone_number' => '+34658947216',
            'supplier_id' => 2,
        ]);
        DB::table('contacts')->insert([
            'name' => 'Laura',
            'surname' => 'Gistau Lardiés',
            'email' => 'laura.gistau@parafarma.es',
            'phone_number' => '+34976574848',
            'supplier_id' => 3,
        ]);
    }
}
