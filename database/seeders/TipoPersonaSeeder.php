<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class TipoPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_personas')->insert([
            'tipo_persona' => 'Voluntario',
            'descripcion' => 'Participante inscrito de campañas o voluntariados'
        ]);
        DB::table('tipo_personas')->insert([
            'tipo_persona' => 'Donante',
            'descripcion' => 'Persona donante al Corredor Biológico'
        ]);
        DB::table('tipo_personas')->insert([
            'tipo_persona' => 'Destinatario',
            'descripcion' => 'Persona encargada de recibir las donaciones realizadas
            al corredor Biológico'
        ]);
        DB::table('tipo_personas')->insert([
            'tipo_persona' => 'Encargado',
            'descripcion' => 'Persona encargada de actividades como Campañas o Voluntariados'
        ]);
    }
}
