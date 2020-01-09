<?php

use Illuminate\Database\Seeder;

class ProvinciasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provincias')->delete();
        
        \DB::table('provincias')->insert(array (
            0 => 
            array (
                'id' => '010100',
                'nombre' => 'Chachapoyas',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => '010200',
                'nombre' => 'Bagua',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => '010300',
                'nombre' => 'Bongará',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => '010400',
                'nombre' => 'Condorcanqui',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => '010500',
                'nombre' => 'Luya',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => '010600',
                'nombre' => 'Rodríguez de Mendoza',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => '010700',
                'nombre' => 'Utcubamba',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => '020100',
                'nombre' => 'Huaraz',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => '020200',
                'nombre' => 'Aija',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => '020300',
                'nombre' => 'Antonio Raymondi',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => '020400',
                'nombre' => 'Asunción',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => '020500',
                'nombre' => 'Bolognesi',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => '020600',
                'nombre' => 'Carhuaz',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => '020700',
                'nombre' => 'Carlos Fermín Fitzcarrald',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => '020800',
                'nombre' => 'Casma',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => '020900',
                'nombre' => 'Corongo',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => '021000',
                'nombre' => 'Huari',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => '021100',
                'nombre' => 'Huarmey',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => '021200',
                'nombre' => 'Huaylas',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => '021300',
                'nombre' => 'Mariscal Luzuriaga',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => '021400',
                'nombre' => 'Ocros',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => '021500',
                'nombre' => 'Pallasca',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => '021600',
                'nombre' => 'Pomabamba',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => '021700',
                'nombre' => 'Recuay',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => '021800',
                'nombre' => 'Santa',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => '021900',
                'nombre' => 'Sihuas',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => '022000',
                'nombre' => 'Yungay',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => '030100',
                'nombre' => 'Abancay',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => '030200',
                'nombre' => 'Andahuaylas',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => '030300',
                'nombre' => 'Antabamba',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => '030400',
                'nombre' => 'Aymaraes',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => '030500',
                'nombre' => 'Cotabambas',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => '030600',
                'nombre' => 'Chincheros',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => '030700',
                'nombre' => 'Grau',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => '040100',
                'nombre' => 'Arequipa',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => '040200',
                'nombre' => 'Camaná',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => '040300',
                'nombre' => 'Caravelí',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => '040400',
                'nombre' => 'Castilla',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => '040500',
                'nombre' => 'Caylloma',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => '040600',
                'nombre' => 'Condesuyos',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => '040700',
                'nombre' => 'Islay',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => '040800',
                'nombre' => 'La Uniòn',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => '050100',
                'nombre' => 'Huamanga',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => '050200',
                'nombre' => 'Cangallo',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => '050300',
                'nombre' => 'Huanca Sancos',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => '050400',
                'nombre' => 'Huanta',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => '050500',
                'nombre' => 'La Mar',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => '050600',
                'nombre' => 'Lucanas',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => '050700',
                'nombre' => 'Parinacochas',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => '050800',
                'nombre' => 'Pàucar del Sara Sara',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => '050900',
                'nombre' => 'Sucre',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => '051000',
                'nombre' => 'Víctor Fajardo',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => '051100',
                'nombre' => 'Vilcas Huamán',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => '060100',
                'nombre' => 'Cajamarca',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => '060200',
                'nombre' => 'Cajabamba',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => '060300',
                'nombre' => 'Celendín',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => '060400',
                'nombre' => 'Chota',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => '060500',
                'nombre' => 'Contumazá',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => '060600',
                'nombre' => 'Cutervo',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => '060700',
                'nombre' => 'Hualgayoc',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => '060800',
                'nombre' => 'Jaén',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => '060900',
                'nombre' => 'San Ignacio',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => '061000',
                'nombre' => 'San Marcos',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => '061100',
                'nombre' => 'San Miguel',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => '061200',
                'nombre' => 'San Pablo',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => '061300',
                'nombre' => 'Santa Cruz',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => '070100',
                'nombre' => 'Prov. Const. del Callao',
                'departamento_id' => '070000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => '080100',
                'nombre' => 'Cusco',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => '080200',
                'nombre' => 'Acomayo',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => '080300',
                'nombre' => 'Anta',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => '080400',
                'nombre' => 'Calca',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => '080500',
                'nombre' => 'Canas',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => '080600',
                'nombre' => 'Canchis',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => '080700',
                'nombre' => 'Chumbivilcas',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => '080800',
                'nombre' => 'Espinar',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => '080900',
                'nombre' => 'La Convención',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => '081000',
                'nombre' => 'Paruro',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => '081100',
                'nombre' => 'Paucartambo',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => '081200',
                'nombre' => 'Quispicanchi',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => '081300',
                'nombre' => 'Urubamba',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => '090100',
                'nombre' => 'Huancavelica',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => '090200',
                'nombre' => 'Acobamba',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => '090300',
                'nombre' => 'Angaraes',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => '090400',
                'nombre' => 'Castrovirreyna',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => '090500',
                'nombre' => 'Churcampa',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => '090600',
                'nombre' => 'Huaytará',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => '090700',
                'nombre' => 'Tayacaja',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => '100100',
                'nombre' => 'Huánuco',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => '100200',
                'nombre' => 'Ambo',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => '100300',
                'nombre' => 'Dos de Mayo',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => '100400',
                'nombre' => 'Huacaybamba',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => '100500',
                'nombre' => 'Huamalíes',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => '100600',
                'nombre' => 'Leoncio Prado',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => '100700',
                'nombre' => 'Marañón',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => '100800',
                'nombre' => 'Pachitea',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => '100900',
                'nombre' => 'Puerto Inca',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => '101000',
                'nombre' => 'Lauricocha ',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => '101100',
                'nombre' => 'Yarowilca ',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => '110100',
                'nombre' => 'Ica ',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => '110200',
                'nombre' => 'Chincha ',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => '110300',
                'nombre' => 'Nasca ',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => '110400',
                'nombre' => 'Palpa ',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => '110500',
                'nombre' => 'Pisco ',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => '120100',
                'nombre' => 'Huancayo ',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => '120200',
                'nombre' => 'Concepción ',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => '120300',
                'nombre' => 'Chanchamayo ',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => '120400',
                'nombre' => 'Jauja ',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => '120500',
                'nombre' => 'Junín ',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => '120600',
                'nombre' => 'Satipo ',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => '120700',
                'nombre' => 'Tarma ',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => '120800',
                'nombre' => 'Yauli ',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => '120900',
                'nombre' => 'Chupaca ',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => '130100',
                'nombre' => 'Trujillo ',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => '130200',
                'nombre' => 'Ascope ',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => '130300',
                'nombre' => 'Bolívar ',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => '130400',
                'nombre' => 'Chepén ',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => '130500',
                'nombre' => 'Julcán ',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => '130600',
                'nombre' => 'Otuzco ',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => '130700',
                'nombre' => 'Pacasmayo ',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => '130800',
                'nombre' => 'Pataz ',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => '130900',
                'nombre' => 'Sánchez Carrión ',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => '131000',
                'nombre' => 'Santiago de Chuco ',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => '131100',
                'nombre' => 'Gran Chimú ',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => '131200',
                'nombre' => 'Virú ',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => '140100',
                'nombre' => 'Chiclayo ',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => '140200',
                'nombre' => 'Ferreñafe ',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => '140300',
                'nombre' => 'Lambayeque ',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => '150100',
                'nombre' => 'Lima ',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => '150200',
                'nombre' => 'Barranca ',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => '150300',
                'nombre' => 'Cajatambo ',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => '150400',
                'nombre' => 'Canta ',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => '150500',
                'nombre' => 'Cañete ',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => '150600',
                'nombre' => 'Huaral ',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => '150700',
                'nombre' => 'Huarochirí ',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => '150800',
                'nombre' => 'Huaura ',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => '150900',
                'nombre' => 'Oyón ',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => '151000',
                'nombre' => 'Yauyos ',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => '160100',
                'nombre' => 'Maynas ',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => '160200',
                'nombre' => 'Alto Amazonas ',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => '160300',
                'nombre' => 'Loreto ',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => '160400',
                'nombre' => 'Mariscal Ramón Castilla ',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => '160500',
                'nombre' => 'Requena ',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => '160600',
                'nombre' => 'Ucayali ',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => '160700',
                'nombre' => 'Datem del Marañón ',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => '160800',
                'nombre' => 'Putumayo',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => '170100',
                'nombre' => 'Tambopata ',
                'departamento_id' => '170000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => '170200',
                'nombre' => 'Manu ',
                'departamento_id' => '170000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => '170300',
                'nombre' => 'Tahuamanu ',
                'departamento_id' => '170000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => '180100',
                'nombre' => 'Mariscal Nieto ',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => '180200',
                'nombre' => 'General Sánchez Cerro ',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => '180300',
                'nombre' => 'Ilo ',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => '190100',
                'nombre' => 'Pasco ',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => '190200',
                'nombre' => 'Daniel Alcides Carrión ',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => '190300',
                'nombre' => 'Oxapampa ',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => '200100',
                'nombre' => 'Piura ',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => '200200',
                'nombre' => 'Ayabaca ',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => '200300',
                'nombre' => 'Huancabamba ',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => '200400',
                'nombre' => 'Morropón ',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => '200500',
                'nombre' => 'Paita ',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => '200600',
                'nombre' => 'Sullana ',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => '200700',
                'nombre' => 'Talara ',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => '200800',
                'nombre' => 'Sechura ',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => '210100',
                'nombre' => 'Puno ',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => '210200',
                'nombre' => 'Azángaro ',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => '210300',
                'nombre' => 'Carabaya ',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => '210400',
                'nombre' => 'Chucuito ',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => '210500',
                'nombre' => 'El Collao ',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => '210600',
                'nombre' => 'Huancané ',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => '210700',
                'nombre' => 'Lampa ',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => '210800',
                'nombre' => 'Melgar ',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => '210900',
                'nombre' => 'Moho ',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => '211000',
                'nombre' => 'San Antonio de Putina ',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => '211100',
                'nombre' => 'San Román ',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => '211200',
                'nombre' => 'Sandia ',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => '211300',
                'nombre' => 'Yunguyo ',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => '220100',
                'nombre' => 'Moyobamba ',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => '220200',
                'nombre' => 'Bellavista ',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => '220300',
                'nombre' => 'El Dorado ',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => '220400',
                'nombre' => 'Huallaga ',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => '220500',
                'nombre' => 'Lamas ',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => '220600',
                'nombre' => 'Mariscal Cáceres ',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => '220700',
                'nombre' => 'Picota ',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => '220800',
                'nombre' => 'Rioja ',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => '220900',
                'nombre' => 'San Martín ',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => '221000',
                'nombre' => 'Tocache ',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => '230100',
                'nombre' => 'Tacna ',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => '230200',
                'nombre' => 'Candarave ',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => '230300',
                'nombre' => 'Jorge Basadre ',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => '230400',
                'nombre' => 'Tarata ',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => '240100',
                'nombre' => 'Tumbes ',
                'departamento_id' => '240000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => '240200',
                'nombre' => 'Contralmirante Villar ',
                'departamento_id' => '240000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => '240300',
                'nombre' => 'Zarumilla ',
                'departamento_id' => '240000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => '250100',
                'nombre' => 'Coronel Portillo ',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => '250200',
                'nombre' => 'Atalaya ',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => '250300',
                'nombre' => 'Padre Abad ',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => '250400',
                'nombre' => 'Purús',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}