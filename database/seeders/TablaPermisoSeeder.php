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
            'ver-Persona/Solicitudes',
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
            'ver-Voluntarios/Historial',
            'crear-Voluntarios',
            'editar-Voluntarios',
            'borrar-Voluntarios',
            //Permisos Galeria
            'ver-Galeria',
            'crear-Galeria',
            'editar-Galeria',
            'borrar-Galeria',
            //Permisos DonacionEspecies
            'ver-DonacionEspecies',
            'crear-DonacionEspecies',
            'editar-DonacionEspecies',
            'borrar-DonacionEspecies',
            //Permisos DonacionArticulos
            'ver-DonacionArticulos',
            'crear-DonacionArticulos',
            'editar-DonacionArticulos',
            'borrar-DonacionArticulos',
            //Permisos DonacionMonetarias
            'ver-DonacionMonetarias',
            'crear-DonacionMonetarias',
            'editar-DonacionMonetarias',
            'borrar-DonacionMonetarias',
            //Permisos CuentasBancarias
            'ver-CuentasBancarias',
            'crear-CuentasBancarias',
            'editar-CuentasBancarias',
            'borrar-CuentasBancarias',
            //Permisos Taller
            'ver-Taller/Historial',
            'crear- Taller',
            'editar-Taller',
            'borrar-Taller',

            //Permiso Administracion 
            'ver-administracion',
        ];

        foreach($permisos as $permiso){
            Permission::create(['name' => $permiso]);
        }
    }
}
