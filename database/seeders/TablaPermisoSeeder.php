<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class TablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //Permiso Administracion 
            'ver-administracion',
            //Permisos Roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            //Permisos Usuarios
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',
            //Permisos TipoPersona
            'ver-TipoPersona',
            'crear-TipoPersona',
            'editar-TipoPersona',
            'borrar-TipoPersona',
            //Permisos Persona
            'ver-Persona',
            'crear-Persona',
            'editar-Persona',
            'borrar-Persona',
            //Permisos Documento
            'ver-Documento',
            'crear-Documento',
            'editar-Documento',
            'borrar-Documento',
            //Permisos Campañas
            'ver-Campañas',
            'crear-Campañas',
            'editar-Campañas',
            'borrar-Campañas',
            //Permisos Voluntarios
            'ver-Voluntarios',
            'crear-Voluntarios',
            'editar-Voluntarios',
            'borrar-Voluntarios',
            //Permisos Galeria
            'ver-Galeria',
            'crear-Galeria',
            'editar-Galeria',
            'borrar-Galeria',
        ];

        foreach($permisos as $permiso){
            Permission::create(['name' => $permiso]);
        }
    }
}
