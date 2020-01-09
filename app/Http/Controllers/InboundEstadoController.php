<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InboundEstado;

class InboundEstadoController extends Controller
{
    /**
     * Lista los posibles estados de Inbound Marketing.
     *
     * @return void
     */
    public function listar()
    {
        $estados = InboundEstado::select(
            'id',
            'nombre'
        )
        ->get();
        return $estados;
    }
}
