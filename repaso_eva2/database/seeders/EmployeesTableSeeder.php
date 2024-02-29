<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            'name' => 'Elena',
            'surname' => 'Martínez Salgado',
            'department' => 'Gerencia',
            'functions' => 'Gerente de la empresa. Encargada de la gestión de departamentos y contacto entre la organización y empresas colaboradoras.',
        ]);
        DB::table('employees')->insert([
            'name' => 'Sara',
            'surname' => 'Lanuza Sierra',
            'department' => 'Compras',
            'functions' => 'Jefa de departamento. Comunicación general con proveedores y encargada de compras con proveedores internacionales.',
        ]);
        DB::table('employees')->insert([
            'name' => 'Alberto',
            'surname' => 'Sebastián García',
            'department' => 'Ventas',
            'functions' => 'Jefe de departamento. Marketing y comunicación con clientes.',
        ]);
        DB::table('employees')->insert([
            'name' => 'Juan José',
            'surname' => 'Esteban Mercadal',
            'department' => 'Logística',
            'functions' => 'Encargado de almacén. Gestión de stock y organización de almacén.',
        ]);
        DB::table('employees')->insert([
            'name' => 'Marta',
            'surname' => 'Novoa Blanco',
            'department' => 'Compras',
            'functions' => 'Empleada. Encargada de compras con proveedores nacionales.',
        ]);
    }
}
