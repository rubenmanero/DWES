<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Papel higiénico',
            'description' => 'Papel higiénico extrasuave para culos sensibles',
            'price' => '1.35',
            'stock' => 35,
            'supplier_id' => 2,
        ]);
        DB::table('products')->insert([
            'name' => 'Lejía blanca 1L',
            'description' => 'Lejía pura capaz de taladrar las baldosas',
            'price' => '0.95',
            'stock' => 20,
            'supplier_id' => 1,
        ]);
        DB::table('products')->insert([
            'name' => 'Detergente Ariel 1.5L',
            'description' => 'Detergente líquido para lavadoras',
            'price' => '4.90',
            'stock' => 15,
            'supplier_id' => 1,
        ]);
        DB::table('products')->insert([
            'name' => 'Gel Hidroalcohólico 350ml',
            'description' => 'Gel hidroalcólico sin perfume, 70% de alcohol',
            'price' => '3.50',
            'stock' => 50,
            'supplier_id' => 3,
        ]);
        DB::table('products')->insert([
            'name' => 'Gel de baño con avena - 750 ml',
            'description' => 'Gel de baño con aceites vegetales, hipoalergénico',
            'price' => '1.50',
            'stock' => 65,
            'supplier_id' => 2,
        ]);
        DB::table('products')->insert([
            'name' => 'Champú HS - 500 ml',
            'description' => 'Champú anticaspa (provoca calvicie solo al 20% de usuarios)',
            'price' => '3.70',
            'stock' => 23,
            'supplier_id' => 2,
        ]);
        DB::table('products')->insert([
            'name' => 'Escobilla de water',
            'description' => 'Arranca hasta el gotelé',
            'price' => '2.30',
            'stock' => 12,
            'supplier_id' => 2,
        ]);
        DB::table('products')->insert([
            'name' => 'Papel de cocina',
            'description' => 'Absorbe los océanos con este papel de 50 capas',
            'price' => '1.90',
            'stock' => 38,
            'supplier_id' => 1,
        ]);
        DB::table('products')->insert([
            'name' => 'Alcohol 96%',
            'description' => 'Ni absenta, ni Jager...',
            'price' => '0.90',
            'stock' => 20,
            'supplier_id' => 3,
        ]);
        DB::table('products')->insert([
            'name' => 'Estropajo de aluminio',
            'description' => 'Para fregar cazuelas o niños muy sucios',
            'price' => '1.50',
            'stock' => 32,
            'supplier_id' => 1,
        ]);
    }
}

?>
