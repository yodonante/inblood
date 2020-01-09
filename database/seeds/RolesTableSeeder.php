<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Permisos
        $ver_propio_perfil = Permission::create(['name' => 'ver propio perfil']);
        $ver_otro_perfil = Permission::create(['name' => 'ver otros perfiles']);
        $crear_donitos = Permission::create(['name' => 'crear donitos']);
        $crear_admins = Permission::create(['name' => 'crear admins']);
        $crear_usuarios = Permission::create(['name' => 'crear usuarios']);
        $crear_donantes = Permission::create(['name' => 'crear donantes']);
        
        # Roles
        $donito = Role::create(['name' => 'donito']);
        $admin = Role::create(['name' => 'admin']);
        $centro_medico = Role::create(['name' => 'centro medico']);
        $donante = Role::create(['name' => 'donante']);
        $paciente = Role::create(['name' => 'paciente']);

        # Asignación de permisos a los roles
        $donito->givePermissionTo([
            $ver_otro_perfil,
            $crear_usuarios,
            $crear_donantes,
            $crear_admins,
            $crear_donitos,
        ]);
        
        $admin->givePermissionTo([
            $ver_otro_perfil,
            $crear_usuarios,
            $crear_donantes,
        ]);

        $centro_medico->givePermissionTo([
            $ver_otro_perfil,
            $crear_donantes,
        ]);

        $donante->givePermissionTo([
            $ver_propio_perfil,
        ]);
    }
}
