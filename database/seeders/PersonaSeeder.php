<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            'nombre' => 'Geiner',
            'apellido1' => 'Zuniga',
            'apellido2' => 'Flores',
            'numero_identificacion' => '12345',
            'tipo_identificacion' => 'Cedula Nacional',
            'pais' => 'Costa Rica',
            'ciudad' => 'Nicoya',
            'calle' => 'Jerusalen',
            'tipo_persona_id'=> 1
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Melany',
            'apellido1' => 'Lawson',
            'apellido2' => 'Mendez',
            'numero_identificacion' => '09876',
            'tipo_identificacion' => 'Cedula Nacional',
            'pais' => 'Costa Rica',
            'ciudad' => 'Nicoya',
            'calle' => 'Corralillo',
            'tipo_persona_id'=> 2
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Maria',
            'apellido1' => 'Acon',
            'apellido2' => 'Vargas',
            'numero_identificacion' => '43456',
            'tipo_identificacion' => 'Cedula Nacional',
            'pais' => 'Costa Rica',
            'ciudad' => 'Nandayure',
            'calle' => 'San Martin',
            'tipo_persona_id'=> 3
        ]);
    }
}
