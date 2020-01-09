<?php

namespace App\Imports;

use App\Persona;
use App\User;
use App\Dato;
use App\CampoContacto;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Carbon\Carbon;

class PersonasImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (Persona::where('dni', '=', '00000005')->exists()) {
            $persona = Persona::where('dni', '=', '00000005')->first();
        } else {
            $persona = new Persona;
            $persona->dni             = $row['dni'];
            $persona->nombre          = $row['nombres'];
            $persona->apellido        = $row['apellidos'];
            $persona->fechaNacimiento = new Carbon($row['fecha_de_nacimiento']);
            $persona->sexo            = $row['sexo'];
            $persona->tiposangre_id   = $row['tipo_de_sangre'];
            $persona->distrito_id     = $row['distrito'];
            $persona->save();
        }
        
        if (User::where('persona_id', '=', $persona->id)->where('centromedico_id', '=', auth()->user()->centromedico_id)->exists()) {
            $user = User::where('persona_id', '=', $persona->id)->where('centromedico_id', '=', auth()->user()->centromedico_id)->first();
        } else {
            $user = new User;
            $user->email = $row['correo'];
            $user->password = bcrypt($row['dni']);
            $user->persona_id = $persona->id;
            $user->centromedico_id = auth()->user()->centromedico_id;
            $user->save();
            $user->assignRole('donante');
        }

        $campo_celular =CampoContacto::where('nombre', '=', 'celular')
        ->where('centromedico_id', '=', auth()->user()->centromedico_id)->first();
        if (Dato::where('campo_contacto_id', '=', $campo_celular->id)->where('persona_id', '=', $persona->id)->exists()) {
            $dato = Dato::where('campo_contacto_id', '=', $campo_celular->id)->where('persona_id', '=', $persona->id)->exists();
        } else {
            if ($row['celular'] != "") {
                $dato = new Dato;
                $dato->valor = $row['celular'];
                $dato->campo_contacto_id = $campo_celular->id;
                $dato->persona_id = $persona->id;
                $dato->save();
            }
        }

        $campo_correo =CampoContacto::where('nombre', '=', 'correo')
        ->where('centromedico_id', '=', auth()->user()->centromedico_id)->first();
        if (Dato::where('campo_contacto_id', '=', $campo_correo->id)->where('persona_id', '=', $persona->id)->exists()) {
            $dato = Dato::where('campo_contacto_id', '=', $campo_correo->id)->where('persona_id', '=', $persona->id)->exists();
        } else {
            if ($row['correo'] != "") {
                $dato = new Dato;
                $dato->valor = $row['correo'];
                $dato->campo_contacto_id = $campo_correo->id;
                $dato->persona_id = $persona->id;
                $dato->save();
            }
        }

        return $persona;
    }
}
