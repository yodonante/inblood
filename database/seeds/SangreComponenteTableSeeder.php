<?php

use Illuminate\Database\Seeder;
use App\SangreComponente;

class SangreComponenteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $componente = new SangreComponente;
        $componente->nombre = 'Hematies';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'Leucocitos';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'Plaquetas';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'Hemoglobina';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'Hematocrito';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'VCM';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'HCM';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'CCMH';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'EosinofilosP';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'BasófilosP';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'MielocitosP';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'MetamielocitosP';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'AbastonadosP';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'SegmentadosP';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'LinfocitosP';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'MonocitosP';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'OtrosP';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'Eosinofilos';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'Basófilos';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'Mielocitos';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'Metamielocitos';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'Abastonados';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'Segmentados';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'Linfocitos';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'Monocitos';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'Otros';
        $componente->save();
        
        $componente = new SangreComponente;
        $componente->nombre = 'Recuento total';
        $componente->save();
    }
}
