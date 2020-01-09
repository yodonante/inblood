<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    /**
     * Listar los roles existentes.
     *
     * @return Spatie\Permission\Models\Role $roles
     */
    public function listarRoles()
    {
        $roles = Role::all();

        return $roles;
    }

    /**
     * Crear un nuevo rol.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return String 'ok'
     */
    public function crearRol(Request $request)
    {
        $nombre = $request->nombre;
        Role::create(['name' => $nombre]);
        return 'ok';
    }

    /**
     * Modificar un rol existente.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return Spatie\Permission\Models\Role $role
     */
    public function modificarRol(Request $request)
    {
        $id = $request->id;
        $role = Role::find($id);

        $role->name = $request->nuevo_nombre;
        $role->save();
    }

    /**
     * Eliminar un rol de la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return String 'ok'
     */
    public function eliminarRol(Request $request)
    {
        $role = Role::find($id);
        $role->delete();
        return 'ok';
    }

    /**
     * Eliminar un rol de la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return String 'ok'
     */
    public function eliminarVariosRol(Request $request)
    {
        $this->validate($request,[
            'roles' => 'required',
        ]);

        $roles =  json_decode($request->get('roles'),true);
        return $roles;
         foreach ($roles as $rol) {
            $rol=Role::find($rol['id']);
            $rol->delete();
        }
        return 'Ok';
    }
    
    /**
     * Listar los permisos existentes.
     *
     * @return Spatie\Permission\Models\Permission $permisos
     */
    public function listarPermisos()
    {
        $permisos = Permission::all();

        return $permisos;
    }

    /**
     * Crear un nuevo permiso.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return String 'ok'
     */
    public function crearPermiso(Request $request)
    {
        $nombre = $request->nombre;
        Permission::create(['name' => $nombre]);
        return 'ok';
    }

    /**
     * Modificar un permiso existente.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return Spatie\Permission\Models\Permission $permiso
     */
    public function modificarPermiso(Request $request)
    {
        $id = $request->id;
        $permiso = Permission::find($id);

        $permiso->name = $request->nuevo_nombre;
        $permiso->save();
    }

    /**
     * Eliminar un Permission de la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return String 'ok'
     */
    public function eliminarPermiso(Request $request)
    {
        $nombre = $request->nombre; 
        $permiso = Permission::find($id);
        $permiso->delete();
        return 'ok';
    }
}
