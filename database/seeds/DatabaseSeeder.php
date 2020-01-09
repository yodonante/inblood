<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DistritosTableSeeder::class,
            ProvinciasTableSeeder::class,
            DepartamentosTableSeeder::class,
            RolesTableSeeder::class,
            CentroMedicosTableSeeder::class,
            UsersTableSeeder::class,
            CampoContactosTableSeeder::class,
            TipoSangresTableSeeder::class,
            EstadoEtapasTableSeeder::class,
            ResultadoLlamadasTableSeeder::class,
            TipodatosTableSeeder::class,
            TipocontactosSeeder::class,
            InboundEstadoTableSeeder::class,
            SangreComponenteTableSeeder::class,
            ReaccionAdversaTableSeeder::class,
        ]);

        # Ejemplos
        $this->call([
            PersonasTableSeeder::class,
            DatosTableSeeder::class,
            CorreosTableSeeder::class,
            TareasTableSeeder::class,
            NotasTableSeeder::class,
            LlamadasTableSeeder::class,
        ]);
    }
}
