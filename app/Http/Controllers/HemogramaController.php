<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hemograma;
use App\SangreComponente;
use App\EtapasDonacion;

class HemogramaController extends Controller
{
    /**
     * Crea un registro de hemograma.
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function crear(Request $request)
    {
        $this->validate($request,[
            'etapa_id'                 => 'required',
            'Hematies'                 => 'required',
            'Leucocitos'               => 'required',
            'Plaquetas'                => 'required',
            'Hemoglobina'              => 'required',
            'Hematocrito'              => 'required',
            'VCM'                      => 'required',
            'HCM'                      => 'required',
            'CCMH'                     => 'required',
            'EosinofilosP'             => 'required',
            'BasófilosP'               => 'required',
            'MielocitosP'              => 'required',
            'MetamielocitosP'          => 'required',
            'AbastonadosP'             => 'required',
            'SegmentadosP'             => 'required',
            'LinfocitosP'              => 'required',
            'MonocitosP'               => 'required',
            'OtrosP'                   => 'required',
            'Eosinofilos'              => 'required',
            'Basófilos'                => 'required',
            'Mielocitos'               => 'required',
            'Metamielocitos'           => 'required',
            'Abastonados'              => 'required',
            'Segmentados'              => 'required',
            'Linfocitos'               => 'required',
            'Monocitos'                => 'required',
            'Otros'                    => 'required',
            'Recuento_total'           => 'required',
            'medida_Hematies'          => 'required',
            'medida_Leucocitos'        => 'required',
            'medida_Plaquetas'         => 'required',
            'medida_Hemoglobina'       => 'required',
            'medida_Hematocrito'       => 'required',
            'medida_VCM'               => 'required',
            'medida_HCM'               => 'required',
            'medida_CCMH'              => 'required',
            'medida_EosinofilosP'      => 'required',
            'medida_BasófilosP'        => 'required',
            'medida_MielocitosP'       => 'required',
            'medida_MetamielocitosP'   => 'required',
            'medida_AbastonadosP'      => 'required',
            'medida_SegmentadosP'      => 'required',
            'medida_LinfocitosP'       => 'required',
            'medida_MonocitosP'        => 'required',
            'medida_OtrosP'            => 'required',
            'medida_Eosinofilos'       => 'required',
            'medida_Basófilos'         => 'required',
            'medida_Mielocitos'        => 'required',
            'medida_Metamielocitos'    => 'required',
            'medida_Abastonados'       => 'required',
            'medida_Segmentados'       => 'required',
            'medida_Linfocitos'        => 'required',
            'medida_Monocitos'         => 'required',
            'medida_Otros'             => 'required',
            'medida_Recuento_total'    => 'required',
            'cumple_Hematies'          => 'required',
            'cumple_Leucocitos'        => 'required',
            'cumple_Plaquetas'         => 'required',
            'cumple_Hemoglobina'       => 'required',
            'cumple_Hematocrito'       => 'required',
            'cumple_VCM'               => 'required',
            'cumple_HCM'               => 'required',
            'cumple_CCMH'              => 'required',
            'cumple_EosinofilosP'      => 'required',
            'cumple_BasófilosP'        => 'required',
            'cumple_MielocitosP'       => 'required',
            'cumple_MetamielocitosP'   => 'required',
            'cumple_AbastonadosP'      => 'required',
            'cumple_SegmentadosP'      => 'required',
            'cumple_LinfocitosP'       => 'required',
            'cumple_MonocitosP'        => 'required',
            'cumple_OtrosP'            => 'required',
            'cumple_Eosinofilos'       => 'required',
            'cumple_Basófilos'         => 'required',
            'cumple_Mielocitos'        => 'required',
            'cumple_Metamielocitos'    => 'required',
            'cumple_Abastonados'       => 'required',
            'cumple_Segmentados'       => 'required',
            'cumple_Linfocitos'        => 'required',
            'cumple_Monocitos'         => 'required',
            'cumple_Otros'             => 'required',
            'cumple_Recuento_total'    => 'required',
        ]);

        $hemograma = new Hemograma;
        $hemograma->save();
        
        $etapa =  EtapasDonacion::find($request->etapa_id);
        $etapa->hemograma_id = $hemograma->id;
        $etapa->save();
        
        $componente = SangreComponente::where('nombre', '=', 'Hematies')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_Hematies,
            'cumple' => $request->cumple_Hematies,
            'comentario' => $request->comentario_Hamties
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'Leucocitos')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_Leucocitos,
            'cumple' => $request->cumple_Leucocitos,
            'comentario' => $request->comentario_Leucocitos
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'Plaquetas')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_Plaquetas,
            'cumple' => $request->cumple_Plaquetas,
            'comentario' => $request->comentario_Plaquetas
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'Hemoglobina')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_Hemoglobina,
            'cumple' => $request->cumple_Hemoglobina,
            'comentario' => $request->comentario_Hemoglobina
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'Hematocrito')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_Hematocrito,
            'cumple' => $request->cumple_Hematocrito,
            'comentario' => $request->comentario_Hematocrito
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'VCM')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_VCM,
            'cumple' => $request->cumple_VCM,
            'comentario' => $request->comentario_VCM
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'HCM')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_HCM,
            'cumple' => $request->cumple_HCM,
            'comentario' => $request->comentario_HCM
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'CCMH')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_CCMH,
            'cumple' => $request->cumple_CCMH,
            'comentario' => $request->comentario_CCMH
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'EosinofilosP')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_EosinofilosP,
            'cumple' => $request->cumple_EosinofilosP,
            'comentario' => $request->comentario_EosinofilosP
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'BasófilosP')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_BasófilosP,
            'cumple' => $request->cumple_BasófilosP,
            'comentario' => $request->comentario_BasófilosP
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'MielocitosP')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_MielocitosP,
            'cumple' => $request->cumple_MielocitosP,
            'comentario' => $request->comentario_MielocitosP
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'MetamielocitosP')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_MetamielocitosP,
            'cumple' => $request->cumple_MetamielocitosP,
            'comentario' => $request->comentario_MetamielocitosP
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'AbastonadosP')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_AbastonadosP,
            'cumple' => $request->cumple_AbastonadosP,
            'comentario' => $request->comentario_AbastonadosP
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'SegmentadosP')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_SegmentadosP,
            'cumple' => $request->cumple_SegmentadosP,
            'comentario' => $request->comentario_SegmentadosP
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'LinfocitosP')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_LinfocitosP,
            'cumple' => $request->cumple_LinfocitosP,
            'comentario' => $request->comentario_LinfocitosP
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'MonocitosP')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_MonocitosP,
            'cumple' => $request->cumple_MonocitosP,
            'comentario' => $request->comentario_MonocitosP
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'OtrosP')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_OtrosP,
            'cumple' => $request->cumple_OtrosP,
            'comentario' => $request->comentario_OtrosP
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'Eosinofilos')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_Eosinofilos,
            'cumple' => $request->cumple_Eosinofilos,
            'comentario' => $request->comentario_Eosinofilos
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'Basófilos')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_Basófilos,
            'cumple' => $request->cumple_Basófilos,
            'comentario' => $request->comentario_Basófilos
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'Mielocitos')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_Mielocitos,
            'cumple' => $request->cumple_Mielocitos,
            'comentario' => $request->comentario_Mielocitos
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'Metamielocitos')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_Metamielocitos,
            'cumple' => $request->cumple_Metamielocitos,
            'comentario' => $request->comentario_Metamielocitos
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'Abastonados')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_Abastonados,
            'cumple' => $request->cumple_Abastonados,
            'comentario' => $request->comentario_Abastonados
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'Segmentados')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_Segmentados,
            'cumple' => $request->cumple_Segmentados,
            'comentario' => $request->comentario_Segmentados
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'Linfocitos')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_Linfocitos,
            'cumple' => $request->cumple_Linfocitos,
            'comentario' => $request->comentario_Linfocitos
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'Monocitos')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_Monocitos,
            'cumple' => $request->cumple_Monocitos,
            'comentario' => $request->comentario_Monocitos
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'Otros')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_Otros,
            'cumple' => $request->cumple_Otros,
            'comentario' => $request->comentario_Otros
        ]);
        
        $componente = SangreComponente::where('nombre', '=', 'Recuento total')->first();
        $hemograma->componentes()->attach($componente->id, [
            'medida' => $request->medida_Recuento_total,
            'cumple' => $request->cumple_Recuento_total,
            'comentario' => $request->comentario_Recuento_total
        ]);
        
        return "Ok";
    }
}
