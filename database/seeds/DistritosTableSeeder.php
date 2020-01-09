<?php

use Illuminate\Database\Seeder;

class DistritosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('distritos')->delete();
        
        \DB::table('distritos')->insert(array (
            0 => 
            array (
                'id' => '010101',
                'nombre' => 'Chachapoyas',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => '010102',
                'nombre' => 'Asunción',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => '010103',
                'nombre' => 'Balsas',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => '010104',
                'nombre' => 'Cheto',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => '010105',
                'nombre' => 'Chiliquin',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => '010106',
                'nombre' => 'Chuquibamba',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => '010107',
                'nombre' => 'Granada',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => '010108',
                'nombre' => 'Huancas',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => '010109',
                'nombre' => 'La Jalca',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => '010110',
                'nombre' => 'Leimebamba',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => '010111',
                'nombre' => 'Levanto',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => '010112',
                'nombre' => 'Magdalena',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => '010113',
                'nombre' => 'Mariscal Castilla',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => '010114',
                'nombre' => 'Molinopampa',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => '010115',
                'nombre' => 'Montevideo',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => '010116',
                'nombre' => 'Olleros',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => '010117',
                'nombre' => 'Quinjalca',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => '010118',
                'nombre' => 'San Francisco de Daguas',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => '010119',
                'nombre' => 'San Isidro de Maino',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => '010120',
                'nombre' => 'Soloco',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => '010121',
                'nombre' => 'Sonche',
                'provincia_id' => '010100',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => '010201',
                'nombre' => 'Bagua',
                'provincia_id' => '010200',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => '010202',
                'nombre' => 'Aramango',
                'provincia_id' => '010200',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => '010203',
                'nombre' => 'Copallin',
                'provincia_id' => '010200',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => '010204',
                'nombre' => 'El Parco',
                'provincia_id' => '010200',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => '010205',
                'nombre' => 'Imaza',
                'provincia_id' => '010200',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => '010206',
                'nombre' => 'La Peca',
                'provincia_id' => '010200',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => '010301',
                'nombre' => 'Jumbilla',
                'provincia_id' => '010300',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => '010302',
                'nombre' => 'Chisquilla',
                'provincia_id' => '010300',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => '010303',
                'nombre' => 'Churuja',
                'provincia_id' => '010300',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => '010304',
                'nombre' => 'Corosha',
                'provincia_id' => '010300',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => '010305',
                'nombre' => 'Cuispes',
                'provincia_id' => '010300',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => '010306',
                'nombre' => 'Florida',
                'provincia_id' => '010300',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => '010307',
                'nombre' => 'Jazan',
                'provincia_id' => '010300',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => '010308',
                'nombre' => 'Recta',
                'provincia_id' => '010300',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => '010309',
                'nombre' => 'San Carlos',
                'provincia_id' => '010300',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => '010310',
                'nombre' => 'Shipasbamba',
                'provincia_id' => '010300',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => '010311',
                'nombre' => 'Valera',
                'provincia_id' => '010300',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => '010312',
                'nombre' => 'Yambrasbamba',
                'provincia_id' => '010300',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => '010401',
                'nombre' => 'Nieva',
                'provincia_id' => '010400',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => '010402',
                'nombre' => 'El Cenepa',
                'provincia_id' => '010400',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => '010403',
                'nombre' => 'Río Santiago',
                'provincia_id' => '010400',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => '010501',
                'nombre' => 'Lamud',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => '010502',
                'nombre' => 'Camporredondo',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => '010503',
                'nombre' => 'Cocabamba',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => '010504',
                'nombre' => 'Colcamar',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => '010505',
                'nombre' => 'Conila',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => '010506',
                'nombre' => 'Inguilpata',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => '010507',
                'nombre' => 'Longuita',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => '010508',
                'nombre' => 'Lonya Chico',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => '010509',
                'nombre' => 'Luya',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => '010510',
                'nombre' => 'Luya Viejo',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => '010511',
                'nombre' => 'María',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => '010512',
                'nombre' => 'Ocalli',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => '010513',
                'nombre' => 'Ocumal',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => '010514',
                'nombre' => 'Pisuquia',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => '010515',
                'nombre' => 'Providencia',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => '010516',
                'nombre' => 'San Cristóbal',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => '010517',
                'nombre' => 'San Francisco de Yeso',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => '010518',
                'nombre' => 'San Jerónimo',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => '010519',
                'nombre' => 'San Juan de Lopecancha',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => '010520',
                'nombre' => 'Santa Catalina',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => '010521',
                'nombre' => 'Santo Tomas',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => '010522',
                'nombre' => 'Tingo',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => '010523',
                'nombre' => 'Trita',
                'provincia_id' => '010500',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => '010601',
                'nombre' => 'San Nicolás',
                'provincia_id' => '010600',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => '010602',
                'nombre' => 'Chirimoto',
                'provincia_id' => '010600',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => '010603',
                'nombre' => 'Cochamal',
                'provincia_id' => '010600',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => '010604',
                'nombre' => 'Huambo',
                'provincia_id' => '010600',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => '010605',
                'nombre' => 'Limabamba',
                'provincia_id' => '010600',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => '010606',
                'nombre' => 'Longar',
                'provincia_id' => '010600',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => '010607',
                'nombre' => 'Mariscal Benavides',
                'provincia_id' => '010600',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => '010608',
                'nombre' => 'Milpuc',
                'provincia_id' => '010600',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => '010609',
                'nombre' => 'Omia',
                'provincia_id' => '010600',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => '010610',
                'nombre' => 'Santa Rosa',
                'provincia_id' => '010600',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => '010611',
                'nombre' => 'Totora',
                'provincia_id' => '010600',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => '010612',
                'nombre' => 'Vista Alegre',
                'provincia_id' => '010600',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => '010701',
                'nombre' => 'Bagua Grande',
                'provincia_id' => '010700',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => '010702',
                'nombre' => 'Cajaruro',
                'provincia_id' => '010700',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => '010703',
                'nombre' => 'Cumba',
                'provincia_id' => '010700',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => '010704',
                'nombre' => 'El Milagro',
                'provincia_id' => '010700',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => '010705',
                'nombre' => 'Jamalca',
                'provincia_id' => '010700',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => '010706',
                'nombre' => 'Lonya Grande',
                'provincia_id' => '010700',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => '010707',
                'nombre' => 'Yamon',
                'provincia_id' => '010700',
                'departamento_id' => '010000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => '020101',
                'nombre' => 'Huaraz',
                'provincia_id' => '020100',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => '020102',
                'nombre' => 'Cochabamba',
                'provincia_id' => '020100',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => '020103',
                'nombre' => 'Colcabamba',
                'provincia_id' => '020100',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => '020104',
                'nombre' => 'Huanchay',
                'provincia_id' => '020100',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => '020105',
                'nombre' => 'Independencia',
                'provincia_id' => '020100',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => '020106',
                'nombre' => 'Jangas',
                'provincia_id' => '020100',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => '020107',
                'nombre' => 'La Libertad',
                'provincia_id' => '020100',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => '020108',
                'nombre' => 'Olleros',
                'provincia_id' => '020100',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => '020109',
                'nombre' => 'Pampas Grande',
                'provincia_id' => '020100',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => '020110',
                'nombre' => 'Pariacoto',
                'provincia_id' => '020100',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => '020111',
                'nombre' => 'Pira',
                'provincia_id' => '020100',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => '020112',
                'nombre' => 'Tarica',
                'provincia_id' => '020100',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => '020201',
                'nombre' => 'Aija',
                'provincia_id' => '020200',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => '020202',
                'nombre' => 'Coris',
                'provincia_id' => '020200',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => '020203',
                'nombre' => 'Huacllan',
                'provincia_id' => '020200',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => '020204',
                'nombre' => 'La Merced',
                'provincia_id' => '020200',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => '020205',
                'nombre' => 'Succha',
                'provincia_id' => '020200',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => '020301',
                'nombre' => 'Llamellin',
                'provincia_id' => '020300',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => '020302',
                'nombre' => 'Aczo',
                'provincia_id' => '020300',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => '020303',
                'nombre' => 'Chaccho',
                'provincia_id' => '020300',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => '020304',
                'nombre' => 'Chingas',
                'provincia_id' => '020300',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => '020305',
                'nombre' => 'Mirgas',
                'provincia_id' => '020300',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => '020306',
                'nombre' => 'San Juan de Rontoy',
                'provincia_id' => '020300',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => '020401',
                'nombre' => 'Chacas',
                'provincia_id' => '020400',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => '020402',
                'nombre' => 'Acochaca',
                'provincia_id' => '020400',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => '020501',
                'nombre' => 'Chiquian',
                'provincia_id' => '020500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => '020502',
                'nombre' => 'Abelardo Pardo Lezameta',
                'provincia_id' => '020500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => '020503',
                'nombre' => 'Antonio Raymondi',
                'provincia_id' => '020500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => '020504',
                'nombre' => 'Aquia',
                'provincia_id' => '020500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => '020505',
                'nombre' => 'Cajacay',
                'provincia_id' => '020500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => '020506',
                'nombre' => 'Canis',
                'provincia_id' => '020500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => '020507',
                'nombre' => 'Colquioc',
                'provincia_id' => '020500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => '020508',
                'nombre' => 'Huallanca',
                'provincia_id' => '020500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => '020509',
                'nombre' => 'Huasta',
                'provincia_id' => '020500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => '020510',
                'nombre' => 'Huayllacayan',
                'provincia_id' => '020500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => '020511',
                'nombre' => 'La Primavera',
                'provincia_id' => '020500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => '020512',
                'nombre' => 'Mangas',
                'provincia_id' => '020500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => '020513',
                'nombre' => 'Pacllon',
                'provincia_id' => '020500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => '020514',
                'nombre' => 'San Miguel de Corpanqui',
                'provincia_id' => '020500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => '020515',
                'nombre' => 'Ticllos',
                'provincia_id' => '020500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => '020601',
                'nombre' => 'Carhuaz',
                'provincia_id' => '020600',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => '020602',
                'nombre' => 'Acopampa',
                'provincia_id' => '020600',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => '020603',
                'nombre' => 'Amashca',
                'provincia_id' => '020600',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => '020604',
                'nombre' => 'Anta',
                'provincia_id' => '020600',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => '020605',
                'nombre' => 'Ataquero',
                'provincia_id' => '020600',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => '020606',
                'nombre' => 'Marcara',
                'provincia_id' => '020600',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => '020607',
                'nombre' => 'Pariahuanca',
                'provincia_id' => '020600',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => '020608',
                'nombre' => 'San Miguel de Aco',
                'provincia_id' => '020600',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => '020609',
                'nombre' => 'Shilla',
                'provincia_id' => '020600',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => '020610',
                'nombre' => 'Tinco',
                'provincia_id' => '020600',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => '020611',
                'nombre' => 'Yungar',
                'provincia_id' => '020600',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => '020701',
                'nombre' => 'San Luis',
                'provincia_id' => '020700',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => '020702',
                'nombre' => 'San Nicolás',
                'provincia_id' => '020700',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => '020703',
                'nombre' => 'Yauya',
                'provincia_id' => '020700',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => '020801',
                'nombre' => 'Casma',
                'provincia_id' => '020800',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => '020802',
                'nombre' => 'Buena Vista Alta',
                'provincia_id' => '020800',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => '020803',
                'nombre' => 'Comandante Noel',
                'provincia_id' => '020800',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => '020804',
                'nombre' => 'Yautan',
                'provincia_id' => '020800',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => '020901',
                'nombre' => 'Corongo',
                'provincia_id' => '020900',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => '020902',
                'nombre' => 'Aco',
                'provincia_id' => '020900',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => '020903',
                'nombre' => 'Bambas',
                'provincia_id' => '020900',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => '020904',
                'nombre' => 'Cusca',
                'provincia_id' => '020900',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => '020905',
                'nombre' => 'La Pampa',
                'provincia_id' => '020900',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => '020906',
                'nombre' => 'Yanac',
                'provincia_id' => '020900',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => '020907',
                'nombre' => 'Yupan',
                'provincia_id' => '020900',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => '021001',
                'nombre' => 'Huari',
                'provincia_id' => '021000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => '021002',
                'nombre' => 'Anra',
                'provincia_id' => '021000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => '021003',
                'nombre' => 'Cajay',
                'provincia_id' => '021000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => '021004',
                'nombre' => 'Chavin de Huantar',
                'provincia_id' => '021000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => '021005',
                'nombre' => 'Huacachi',
                'provincia_id' => '021000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => '021006',
                'nombre' => 'Huacchis',
                'provincia_id' => '021000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => '021007',
                'nombre' => 'Huachis',
                'provincia_id' => '021000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => '021008',
                'nombre' => 'Huantar',
                'provincia_id' => '021000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => '021009',
                'nombre' => 'Masin',
                'provincia_id' => '021000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => '021010',
                'nombre' => 'Paucas',
                'provincia_id' => '021000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => '021011',
                'nombre' => 'Ponto',
                'provincia_id' => '021000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => '021012',
                'nombre' => 'Rahuapampa',
                'provincia_id' => '021000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => '021013',
                'nombre' => 'Rapayan',
                'provincia_id' => '021000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => '021014',
                'nombre' => 'San Marcos',
                'provincia_id' => '021000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => '021015',
                'nombre' => 'San Pedro de Chana',
                'provincia_id' => '021000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => '021016',
                'nombre' => 'Uco',
                'provincia_id' => '021000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => '021101',
                'nombre' => 'Huarmey',
                'provincia_id' => '021100',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => '021102',
                'nombre' => 'Cochapeti',
                'provincia_id' => '021100',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => '021103',
                'nombre' => 'Culebras',
                'provincia_id' => '021100',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => '021104',
                'nombre' => 'Huayan',
                'provincia_id' => '021100',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => '021105',
                'nombre' => 'Malvas',
                'provincia_id' => '021100',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => '021201',
                'nombre' => 'Caraz',
                'provincia_id' => '021200',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => '021202',
                'nombre' => 'Huallanca',
                'provincia_id' => '021200',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => '021203',
                'nombre' => 'Huata',
                'provincia_id' => '021200',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => '021204',
                'nombre' => 'Huaylas',
                'provincia_id' => '021200',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => '021205',
                'nombre' => 'Mato',
                'provincia_id' => '021200',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => '021206',
                'nombre' => 'Pamparomas',
                'provincia_id' => '021200',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => '021207',
                'nombre' => 'Pueblo Libre',
                'provincia_id' => '021200',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => '021208',
                'nombre' => 'Santa Cruz',
                'provincia_id' => '021200',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => '021209',
                'nombre' => 'Santo Toribio',
                'provincia_id' => '021200',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => '021210',
                'nombre' => 'Yuracmarca',
                'provincia_id' => '021200',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => '021301',
                'nombre' => 'Piscobamba',
                'provincia_id' => '021300',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => '021302',
                'nombre' => 'Casca',
                'provincia_id' => '021300',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => '021303',
                'nombre' => 'Eleazar Guzmán Barron',
                'provincia_id' => '021300',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => '021304',
                'nombre' => 'Fidel Olivas Escudero',
                'provincia_id' => '021300',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => '021305',
                'nombre' => 'Llama',
                'provincia_id' => '021300',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => '021306',
                'nombre' => 'Llumpa',
                'provincia_id' => '021300',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => '021307',
                'nombre' => 'Lucma',
                'provincia_id' => '021300',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => '021308',
                'nombre' => 'Musga',
                'provincia_id' => '021300',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => '021401',
                'nombre' => 'Ocros',
                'provincia_id' => '021400',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => '021402',
                'nombre' => 'Acas',
                'provincia_id' => '021400',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => '021403',
                'nombre' => 'Cajamarquilla',
                'provincia_id' => '021400',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => '021404',
                'nombre' => 'Carhuapampa',
                'provincia_id' => '021400',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => '021405',
                'nombre' => 'Cochas',
                'provincia_id' => '021400',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => '021406',
                'nombre' => 'Congas',
                'provincia_id' => '021400',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => '021407',
                'nombre' => 'Llipa',
                'provincia_id' => '021400',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => '021408',
                'nombre' => 'San Cristóbal de Rajan',
                'provincia_id' => '021400',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => '021409',
                'nombre' => 'San Pedro',
                'provincia_id' => '021400',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => '021410',
                'nombre' => 'Santiago de Chilcas',
                'provincia_id' => '021400',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => '021501',
                'nombre' => 'Cabana',
                'provincia_id' => '021500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => '021502',
                'nombre' => 'Bolognesi',
                'provincia_id' => '021500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => '021503',
                'nombre' => 'Conchucos',
                'provincia_id' => '021500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => '021504',
                'nombre' => 'Huacaschuque',
                'provincia_id' => '021500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => '021505',
                'nombre' => 'Huandoval',
                'provincia_id' => '021500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => '021506',
                'nombre' => 'Lacabamba',
                'provincia_id' => '021500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => '021507',
                'nombre' => 'Llapo',
                'provincia_id' => '021500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => '021508',
                'nombre' => 'Pallasca',
                'provincia_id' => '021500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => '021509',
                'nombre' => 'Pampas',
                'provincia_id' => '021500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => '021510',
                'nombre' => 'Santa Rosa',
                'provincia_id' => '021500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => '021511',
                'nombre' => 'Tauca',
                'provincia_id' => '021500',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => '021601',
                'nombre' => 'Pomabamba',
                'provincia_id' => '021600',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => '021602',
                'nombre' => 'Huayllan',
                'provincia_id' => '021600',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => '021603',
                'nombre' => 'Parobamba',
                'provincia_id' => '021600',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => '021604',
                'nombre' => 'Quinuabamba',
                'provincia_id' => '021600',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => '021701',
                'nombre' => 'Recuay',
                'provincia_id' => '021700',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => '021702',
                'nombre' => 'Catac',
                'provincia_id' => '021700',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => '021703',
                'nombre' => 'Cotaparaco',
                'provincia_id' => '021700',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => '021704',
                'nombre' => 'Huayllapampa',
                'provincia_id' => '021700',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => '021705',
                'nombre' => 'Llacllin',
                'provincia_id' => '021700',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => '021706',
                'nombre' => 'Marca',
                'provincia_id' => '021700',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => '021707',
                'nombre' => 'Pampas Chico',
                'provincia_id' => '021700',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => '021708',
                'nombre' => 'Pararin',
                'provincia_id' => '021700',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => '021709',
                'nombre' => 'Tapacocha',
                'provincia_id' => '021700',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => '021710',
                'nombre' => 'Ticapampa',
                'provincia_id' => '021700',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => '021801',
                'nombre' => 'Chimbote',
                'provincia_id' => '021800',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => '021802',
                'nombre' => 'Cáceres del Perú',
                'provincia_id' => '021800',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => '021803',
                'nombre' => 'Coishco',
                'provincia_id' => '021800',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => '021804',
                'nombre' => 'Macate',
                'provincia_id' => '021800',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => '021805',
                'nombre' => 'Moro',
                'provincia_id' => '021800',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => '021806',
                'nombre' => 'Nepeña',
                'provincia_id' => '021800',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => '021807',
                'nombre' => 'Samanco',
                'provincia_id' => '021800',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => '021808',
                'nombre' => 'Santa',
                'provincia_id' => '021800',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => '021809',
                'nombre' => 'Nuevo Chimbote',
                'provincia_id' => '021800',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => '021901',
                'nombre' => 'Sihuas',
                'provincia_id' => '021900',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => '021902',
                'nombre' => 'Acobamba',
                'provincia_id' => '021900',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => '021903',
                'nombre' => 'Alfonso Ugarte',
                'provincia_id' => '021900',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => '021904',
                'nombre' => 'Cashapampa',
                'provincia_id' => '021900',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => '021905',
                'nombre' => 'Chingalpo',
                'provincia_id' => '021900',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => '021906',
                'nombre' => 'Huayllabamba',
                'provincia_id' => '021900',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => '021907',
                'nombre' => 'Quiches',
                'provincia_id' => '021900',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => '021908',
                'nombre' => 'Ragash',
                'provincia_id' => '021900',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => '021909',
                'nombre' => 'San Juan',
                'provincia_id' => '021900',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => '021910',
                'nombre' => 'Sicsibamba',
                'provincia_id' => '021900',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => '022001',
                'nombre' => 'Yungay',
                'provincia_id' => '022000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => '022002',
                'nombre' => 'Cascapara',
                'provincia_id' => '022000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => '022003',
                'nombre' => 'Mancos',
                'provincia_id' => '022000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => '022004',
                'nombre' => 'Matacoto',
                'provincia_id' => '022000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => '022005',
                'nombre' => 'Quillo',
                'provincia_id' => '022000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => '022006',
                'nombre' => 'Ranrahirca',
                'provincia_id' => '022000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => '022007',
                'nombre' => 'Shupluy',
                'provincia_id' => '022000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => '022008',
                'nombre' => 'Yanama',
                'provincia_id' => '022000',
                'departamento_id' => '020000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => '030101',
                'nombre' => 'Abancay',
                'provincia_id' => '030100',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => '030102',
                'nombre' => 'Chacoche',
                'provincia_id' => '030100',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => '030103',
                'nombre' => 'Circa',
                'provincia_id' => '030100',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => '030104',
                'nombre' => 'Curahuasi',
                'provincia_id' => '030100',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => '030105',
                'nombre' => 'Huanipaca',
                'provincia_id' => '030100',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => '030106',
                'nombre' => 'Lambrama',
                'provincia_id' => '030100',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => '030107',
                'nombre' => 'Pichirhua',
                'provincia_id' => '030100',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => '030108',
                'nombre' => 'San Pedro de Cachora',
                'provincia_id' => '030100',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => '030109',
                'nombre' => 'Tamburco',
                'provincia_id' => '030100',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => '030201',
                'nombre' => 'Andahuaylas',
                'provincia_id' => '030200',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => '030202',
                'nombre' => 'Andarapa',
                'provincia_id' => '030200',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => '030203',
                'nombre' => 'Chiara',
                'provincia_id' => '030200',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => '030204',
                'nombre' => 'Huancarama',
                'provincia_id' => '030200',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => '030205',
                'nombre' => 'Huancaray',
                'provincia_id' => '030200',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => '030206',
                'nombre' => 'Huayana',
                'provincia_id' => '030200',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => '030207',
                'nombre' => 'Kishuara',
                'provincia_id' => '030200',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => '030208',
                'nombre' => 'Pacobamba',
                'provincia_id' => '030200',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => '030209',
                'nombre' => 'Pacucha',
                'provincia_id' => '030200',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => '030210',
                'nombre' => 'Pampachiri',
                'provincia_id' => '030200',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => '030211',
                'nombre' => 'Pomacocha',
                'provincia_id' => '030200',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => '030212',
                'nombre' => 'San Antonio de Cachi',
                'provincia_id' => '030200',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => '030213',
                'nombre' => 'San Jerónimo',
                'provincia_id' => '030200',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => '030214',
                'nombre' => 'San Miguel de Chaccrampa',
                'provincia_id' => '030200',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => '030215',
                'nombre' => 'Santa María de Chicmo',
                'provincia_id' => '030200',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => '030216',
                'nombre' => 'Talavera',
                'provincia_id' => '030200',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => '030217',
                'nombre' => 'Tumay Huaraca',
                'provincia_id' => '030200',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => '030218',
                'nombre' => 'Turpo',
                'provincia_id' => '030200',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => '030219',
                'nombre' => 'Kaquiabamba',
                'provincia_id' => '030200',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => '030220',
                'nombre' => 'José María Arguedas',
                'provincia_id' => '030200',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => '030301',
                'nombre' => 'Antabamba',
                'provincia_id' => '030300',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => '030302',
                'nombre' => 'El Oro',
                'provincia_id' => '030300',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => '030303',
                'nombre' => 'Huaquirca',
                'provincia_id' => '030300',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => '030304',
                'nombre' => 'Juan Espinoza Medrano',
                'provincia_id' => '030300',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => '030305',
                'nombre' => 'Oropesa',
                'provincia_id' => '030300',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => '030306',
                'nombre' => 'Pachaconas',
                'provincia_id' => '030300',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => '030307',
                'nombre' => 'Sabaino',
                'provincia_id' => '030300',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => '030401',
                'nombre' => 'Chalhuanca',
                'provincia_id' => '030400',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => '030402',
                'nombre' => 'Capaya',
                'provincia_id' => '030400',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => '030403',
                'nombre' => 'Caraybamba',
                'provincia_id' => '030400',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => '030404',
                'nombre' => 'Chapimarca',
                'provincia_id' => '030400',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => '030405',
                'nombre' => 'Colcabamba',
                'provincia_id' => '030400',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => '030406',
                'nombre' => 'Cotaruse',
                'provincia_id' => '030400',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => '030407',
                'nombre' => 'Ihuayllo',
                'provincia_id' => '030400',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => '030408',
                'nombre' => 'Justo Apu Sahuaraura',
                'provincia_id' => '030400',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => '030409',
                'nombre' => 'Lucre',
                'provincia_id' => '030400',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => '030410',
                'nombre' => 'Pocohuanca',
                'provincia_id' => '030400',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => '030411',
                'nombre' => 'San Juan de Chacña',
                'provincia_id' => '030400',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => '030412',
                'nombre' => 'Sañayca',
                'provincia_id' => '030400',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => '030413',
                'nombre' => 'Soraya',
                'provincia_id' => '030400',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => '030414',
                'nombre' => 'Tapairihua',
                'provincia_id' => '030400',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => '030415',
                'nombre' => 'Tintay',
                'provincia_id' => '030400',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => '030416',
                'nombre' => 'Toraya',
                'provincia_id' => '030400',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => '030417',
                'nombre' => 'Yanaca',
                'provincia_id' => '030400',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => '030501',
                'nombre' => 'Tambobamba',
                'provincia_id' => '030500',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => '030502',
                'nombre' => 'Cotabambas',
                'provincia_id' => '030500',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => '030503',
                'nombre' => 'Coyllurqui',
                'provincia_id' => '030500',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => '030504',
                'nombre' => 'Haquira',
                'provincia_id' => '030500',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => '030505',
                'nombre' => 'Mara',
                'provincia_id' => '030500',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => '030506',
                'nombre' => 'Challhuahuacho',
                'provincia_id' => '030500',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => '030601',
                'nombre' => 'Chincheros',
                'provincia_id' => '030600',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => '030602',
                'nombre' => 'Anco_Huallo',
                'provincia_id' => '030600',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => '030603',
                'nombre' => 'Cocharcas',
                'provincia_id' => '030600',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => '030604',
                'nombre' => 'Huaccana',
                'provincia_id' => '030600',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => '030605',
                'nombre' => 'Ocobamba',
                'provincia_id' => '030600',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => '030606',
                'nombre' => 'Ongoy',
                'provincia_id' => '030600',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => '030607',
                'nombre' => 'Uranmarca',
                'provincia_id' => '030600',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => '030608',
                'nombre' => 'Ranracancha',
                'provincia_id' => '030600',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => '030609',
                'nombre' => 'Rocchacc',
                'provincia_id' => '030600',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => '030610',
                'nombre' => 'El Porvenir',
                'provincia_id' => '030600',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => '030611',
                'nombre' => 'Los Chankas',
                'provincia_id' => '030600',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => '030701',
                'nombre' => 'Chuquibambilla',
                'provincia_id' => '030700',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => '030702',
                'nombre' => 'Curpahuasi',
                'provincia_id' => '030700',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => '030703',
                'nombre' => 'Gamarra',
                'provincia_id' => '030700',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => '030704',
                'nombre' => 'Huayllati',
                'provincia_id' => '030700',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => '030705',
                'nombre' => 'Mamara',
                'provincia_id' => '030700',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => '030706',
                'nombre' => 'Micaela Bastidas',
                'provincia_id' => '030700',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => '030707',
                'nombre' => 'Pataypampa',
                'provincia_id' => '030700',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => '030708',
                'nombre' => 'Progreso',
                'provincia_id' => '030700',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => '030709',
                'nombre' => 'San Antonio',
                'provincia_id' => '030700',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => '030710',
                'nombre' => 'Santa Rosa',
                'provincia_id' => '030700',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => '030711',
                'nombre' => 'Turpay',
                'provincia_id' => '030700',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => '030712',
                'nombre' => 'Vilcabamba',
                'provincia_id' => '030700',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => '030713',
                'nombre' => 'Virundo',
                'provincia_id' => '030700',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => '030714',
                'nombre' => 'Curasco',
                'provincia_id' => '030700',
                'departamento_id' => '030000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => '040101',
                'nombre' => 'Arequipa',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => '040102',
                'nombre' => 'Alto Selva Alegre',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => '040103',
                'nombre' => 'Cayma',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => '040104',
                'nombre' => 'Cerro Colorado',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => '040105',
                'nombre' => 'Characato',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => '040106',
                'nombre' => 'Chiguata',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => '040107',
                'nombre' => 'Jacobo Hunter',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => '040108',
                'nombre' => 'La Joya',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => '040109',
                'nombre' => 'Mariano Melgar',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => '040110',
                'nombre' => 'Miraflores',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => '040111',
                'nombre' => 'Mollebaya',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => '040112',
                'nombre' => 'Paucarpata',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => '040113',
                'nombre' => 'Pocsi',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => '040114',
                'nombre' => 'Polobaya',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => '040115',
                'nombre' => 'Quequeña',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => '040116',
                'nombre' => 'Sabandia',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => '040117',
                'nombre' => 'Sachaca',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => '040118',
                'nombre' => 'San Juan de Siguas',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => '040119',
                'nombre' => 'San Juan de Tarucani',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => '040120',
                'nombre' => 'Santa Isabel de Siguas',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => '040121',
                'nombre' => 'Santa Rita de Siguas',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => '040122',
                'nombre' => 'Socabaya',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => '040123',
                'nombre' => 'Tiabaya',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => '040124',
                'nombre' => 'Uchumayo',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => '040125',
                'nombre' => 'Vitor',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => '040126',
                'nombre' => 'Yanahuara',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => '040127',
                'nombre' => 'Yarabamba',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => '040128',
                'nombre' => 'Yura',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => '040129',
                'nombre' => 'José Luis Bustamante Y Rivero',
                'provincia_id' => '040100',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => '040201',
                'nombre' => 'Camaná',
                'provincia_id' => '040200',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => '040202',
                'nombre' => 'José María Quimper',
                'provincia_id' => '040200',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => '040203',
                'nombre' => 'Mariano Nicolás Valcárcel',
                'provincia_id' => '040200',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => '040204',
                'nombre' => 'Mariscal Cáceres',
                'provincia_id' => '040200',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => '040205',
                'nombre' => 'Nicolás de Pierola',
                'provincia_id' => '040200',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => '040206',
                'nombre' => 'Ocoña',
                'provincia_id' => '040200',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => '040207',
                'nombre' => 'Quilca',
                'provincia_id' => '040200',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => '040208',
                'nombre' => 'Samuel Pastor',
                'provincia_id' => '040200',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => '040301',
                'nombre' => 'Caravelí',
                'provincia_id' => '040300',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => '040302',
                'nombre' => 'Acarí',
                'provincia_id' => '040300',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => '040303',
                'nombre' => 'Atico',
                'provincia_id' => '040300',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => '040304',
                'nombre' => 'Atiquipa',
                'provincia_id' => '040300',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => '040305',
                'nombre' => 'Bella Unión',
                'provincia_id' => '040300',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => '040306',
                'nombre' => 'Cahuacho',
                'provincia_id' => '040300',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => '040307',
                'nombre' => 'Chala',
                'provincia_id' => '040300',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => '040308',
                'nombre' => 'Chaparra',
                'provincia_id' => '040300',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => '040309',
                'nombre' => 'Huanuhuanu',
                'provincia_id' => '040300',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => '040310',
                'nombre' => 'Jaqui',
                'provincia_id' => '040300',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => '040311',
                'nombre' => 'Lomas',
                'provincia_id' => '040300',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => '040312',
                'nombre' => 'Quicacha',
                'provincia_id' => '040300',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => '040313',
                'nombre' => 'Yauca',
                'provincia_id' => '040300',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => '040401',
                'nombre' => 'Aplao',
                'provincia_id' => '040400',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => '040402',
                'nombre' => 'Andagua',
                'provincia_id' => '040400',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => '040403',
                'nombre' => 'Ayo',
                'provincia_id' => '040400',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => '040404',
                'nombre' => 'Chachas',
                'provincia_id' => '040400',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => '040405',
                'nombre' => 'Chilcaymarca',
                'provincia_id' => '040400',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => '040406',
                'nombre' => 'Choco',
                'provincia_id' => '040400',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => '040407',
                'nombre' => 'Huancarqui',
                'provincia_id' => '040400',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => '040408',
                'nombre' => 'Machaguay',
                'provincia_id' => '040400',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => '040409',
                'nombre' => 'Orcopampa',
                'provincia_id' => '040400',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => '040410',
                'nombre' => 'Pampacolca',
                'provincia_id' => '040400',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => '040411',
                'nombre' => 'Tipan',
                'provincia_id' => '040400',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => '040412',
                'nombre' => 'Uñon',
                'provincia_id' => '040400',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => '040413',
                'nombre' => 'Uraca',
                'provincia_id' => '040400',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => '040414',
                'nombre' => 'Viraco',
                'provincia_id' => '040400',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => '040501',
                'nombre' => 'Chivay',
                'provincia_id' => '040500',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => '040502',
                'nombre' => 'Achoma',
                'provincia_id' => '040500',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => '040503',
                'nombre' => 'Cabanaconde',
                'provincia_id' => '040500',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => '040504',
                'nombre' => 'Callalli',
                'provincia_id' => '040500',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => '040505',
                'nombre' => 'Caylloma',
                'provincia_id' => '040500',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => '040506',
                'nombre' => 'Coporaque',
                'provincia_id' => '040500',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => '040507',
                'nombre' => 'Huambo',
                'provincia_id' => '040500',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => '040508',
                'nombre' => 'Huanca',
                'provincia_id' => '040500',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => '040509',
                'nombre' => 'Ichupampa',
                'provincia_id' => '040500',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => '040510',
                'nombre' => 'Lari',
                'provincia_id' => '040500',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => '040511',
                'nombre' => 'Lluta',
                'provincia_id' => '040500',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => '040512',
                'nombre' => 'Maca',
                'provincia_id' => '040500',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => '040513',
                'nombre' => 'Madrigal',
                'provincia_id' => '040500',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => '040514',
                'nombre' => 'San Antonio de Chuca',
                'provincia_id' => '040500',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => '040515',
                'nombre' => 'Sibayo',
                'provincia_id' => '040500',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => '040516',
                'nombre' => 'Tapay',
                'provincia_id' => '040500',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => '040517',
                'nombre' => 'Tisco',
                'provincia_id' => '040500',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => '040518',
                'nombre' => 'Tuti',
                'provincia_id' => '040500',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => '040519',
                'nombre' => 'Yanque',
                'provincia_id' => '040500',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => '040520',
                'nombre' => 'Majes',
                'provincia_id' => '040500',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => '040601',
                'nombre' => 'Chuquibamba',
                'provincia_id' => '040600',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => '040602',
                'nombre' => 'Andaray',
                'provincia_id' => '040600',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => '040603',
                'nombre' => 'Cayarani',
                'provincia_id' => '040600',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => '040604',
                'nombre' => 'Chichas',
                'provincia_id' => '040600',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => '040605',
                'nombre' => 'Iray',
                'provincia_id' => '040600',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => '040606',
                'nombre' => 'Río Grande',
                'provincia_id' => '040600',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => '040607',
                'nombre' => 'Salamanca',
                'provincia_id' => '040600',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => '040608',
                'nombre' => 'Yanaquihua',
                'provincia_id' => '040600',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => '040701',
                'nombre' => 'Mollendo',
                'provincia_id' => '040700',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => '040702',
                'nombre' => 'Cocachacra',
                'provincia_id' => '040700',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => '040703',
                'nombre' => 'Dean Valdivia',
                'provincia_id' => '040700',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => '040704',
                'nombre' => 'Islay',
                'provincia_id' => '040700',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => '040705',
                'nombre' => 'Mejia',
                'provincia_id' => '040700',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => '040706',
                'nombre' => 'Punta de Bombón',
                'provincia_id' => '040700',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => '040801',
                'nombre' => 'Cotahuasi',
                'provincia_id' => '040800',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => '040802',
                'nombre' => 'Alca',
                'provincia_id' => '040800',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => '040803',
                'nombre' => 'Charcana',
                'provincia_id' => '040800',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => '040804',
                'nombre' => 'Huaynacotas',
                'provincia_id' => '040800',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => '040805',
                'nombre' => 'Pampamarca',
                'provincia_id' => '040800',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => '040806',
                'nombre' => 'Puyca',
                'provincia_id' => '040800',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => '040807',
                'nombre' => 'Quechualla',
                'provincia_id' => '040800',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => '040808',
                'nombre' => 'Sayla',
                'provincia_id' => '040800',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => '040809',
                'nombre' => 'Tauria',
                'provincia_id' => '040800',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => '040810',
                'nombre' => 'Tomepampa',
                'provincia_id' => '040800',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => '040811',
                'nombre' => 'Toro',
                'provincia_id' => '040800',
                'departamento_id' => '040000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => '050101',
                'nombre' => 'Ayacucho',
                'provincia_id' => '050100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => '050102',
                'nombre' => 'Acocro',
                'provincia_id' => '050100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => '050103',
                'nombre' => 'Acos Vinchos',
                'provincia_id' => '050100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => '050104',
                'nombre' => 'Carmen Alto',
                'provincia_id' => '050100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => '050105',
                'nombre' => 'Chiara',
                'provincia_id' => '050100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => '050106',
                'nombre' => 'Ocros',
                'provincia_id' => '050100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => '050107',
                'nombre' => 'Pacaycasa',
                'provincia_id' => '050100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => '050108',
                'nombre' => 'Quinua',
                'provincia_id' => '050100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => '050109',
                'nombre' => 'San José de Ticllas',
                'provincia_id' => '050100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => '050110',
                'nombre' => 'San Juan Bautista',
                'provincia_id' => '050100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => '050111',
                'nombre' => 'Santiago de Pischa',
                'provincia_id' => '050100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => '050112',
                'nombre' => 'Socos',
                'provincia_id' => '050100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => '050113',
                'nombre' => 'Tambillo',
                'provincia_id' => '050100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => '050114',
                'nombre' => 'Vinchos',
                'provincia_id' => '050100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => '050115',
                'nombre' => 'Jesús Nazareno',
                'provincia_id' => '050100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => '050116',
                'nombre' => 'Andrés Avelino Cáceres Dorregaray',
                'provincia_id' => '050100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => '050201',
                'nombre' => 'Cangallo',
                'provincia_id' => '050200',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => '050202',
                'nombre' => 'Chuschi',
                'provincia_id' => '050200',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => '050203',
                'nombre' => 'Los Morochucos',
                'provincia_id' => '050200',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => '050204',
                'nombre' => 'María Parado de Bellido',
                'provincia_id' => '050200',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => '050205',
                'nombre' => 'Paras',
                'provincia_id' => '050200',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => '050206',
                'nombre' => 'Totos',
                'provincia_id' => '050200',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => '050301',
                'nombre' => 'Sancos',
                'provincia_id' => '050300',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => '050302',
                'nombre' => 'Carapo',
                'provincia_id' => '050300',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => '050303',
                'nombre' => 'Sacsamarca',
                'provincia_id' => '050300',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => '050304',
                'nombre' => 'Santiago de Lucanamarca',
                'provincia_id' => '050300',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => '050401',
                'nombre' => 'Huanta',
                'provincia_id' => '050400',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => '050402',
                'nombre' => 'Ayahuanco',
                'provincia_id' => '050400',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => '050403',
                'nombre' => 'Huamanguilla',
                'provincia_id' => '050400',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => '050404',
                'nombre' => 'Iguain',
                'provincia_id' => '050400',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => '050405',
                'nombre' => 'Luricocha',
                'provincia_id' => '050400',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => '050406',
                'nombre' => 'Santillana',
                'provincia_id' => '050400',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => '050407',
                'nombre' => 'Sivia',
                'provincia_id' => '050400',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => '050408',
                'nombre' => 'Llochegua',
                'provincia_id' => '050400',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => '050409',
                'nombre' => 'Canayre',
                'provincia_id' => '050400',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => '050410',
                'nombre' => 'Uchuraccay',
                'provincia_id' => '050400',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => '050411',
                'nombre' => 'Pucacolpa',
                'provincia_id' => '050400',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => '050412',
                'nombre' => 'Chaca',
                'provincia_id' => '050400',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => '050501',
                'nombre' => 'San Miguel',
                'provincia_id' => '050500',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => '050502',
                'nombre' => 'Anco',
                'provincia_id' => '050500',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => '050503',
                'nombre' => 'Ayna',
                'provincia_id' => '050500',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => '050504',
                'nombre' => 'Chilcas',
                'provincia_id' => '050500',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => '050505',
                'nombre' => 'Chungui',
                'provincia_id' => '050500',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => '050506',
                'nombre' => 'Luis Carranza',
                'provincia_id' => '050500',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => '050507',
                'nombre' => 'Santa Rosa',
                'provincia_id' => '050500',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => '050508',
                'nombre' => 'Tambo',
                'provincia_id' => '050500',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => '050509',
                'nombre' => 'Samugari',
                'provincia_id' => '050500',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => '050510',
                'nombre' => 'Anchihuay',
                'provincia_id' => '050500',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => '050511',
                'nombre' => 'Oronccoy',
                'provincia_id' => '050500',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => '050601',
                'nombre' => 'Puquio',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => '050602',
                'nombre' => 'Aucara',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => '050603',
                'nombre' => 'Cabana',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => '050604',
                'nombre' => 'Carmen Salcedo',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => '050605',
                'nombre' => 'Chaviña',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => '050606',
                'nombre' => 'Chipao',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => '050607',
                'nombre' => 'Huac-Huas',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => '050608',
                'nombre' => 'Laramate',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('distritos')->insert(array (
            0 => 
            array (
                'id' => '050609',
                'nombre' => 'Leoncio Prado',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => '050610',
                'nombre' => 'Llauta',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => '050611',
                'nombre' => 'Lucanas',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => '050612',
                'nombre' => 'Ocaña',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => '050613',
                'nombre' => 'Otoca',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => '050614',
                'nombre' => 'Saisa',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => '050615',
                'nombre' => 'San Cristóbal',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => '050616',
                'nombre' => 'San Juan',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => '050617',
                'nombre' => 'San Pedro',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => '050618',
                'nombre' => 'San Pedro de Palco',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => '050619',
                'nombre' => 'Sancos',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => '050620',
                'nombre' => 'Santa Ana de Huaycahuacho',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => '050621',
                'nombre' => 'Santa Lucia',
                'provincia_id' => '050600',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => '050701',
                'nombre' => 'Coracora',
                'provincia_id' => '050700',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => '050702',
                'nombre' => 'Chumpi',
                'provincia_id' => '050700',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => '050703',
                'nombre' => 'Coronel Castañeda',
                'provincia_id' => '050700',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => '050704',
                'nombre' => 'Pacapausa',
                'provincia_id' => '050700',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => '050705',
                'nombre' => 'Pullo',
                'provincia_id' => '050700',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => '050706',
                'nombre' => 'Puyusca',
                'provincia_id' => '050700',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => '050707',
                'nombre' => 'San Francisco de Ravacayco',
                'provincia_id' => '050700',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => '050708',
                'nombre' => 'Upahuacho',
                'provincia_id' => '050700',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => '050801',
                'nombre' => 'Pausa',
                'provincia_id' => '050800',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => '050802',
                'nombre' => 'Colta',
                'provincia_id' => '050800',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => '050803',
                'nombre' => 'Corculla',
                'provincia_id' => '050800',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => '050804',
                'nombre' => 'Lampa',
                'provincia_id' => '050800',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => '050805',
                'nombre' => 'Marcabamba',
                'provincia_id' => '050800',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => '050806',
                'nombre' => 'Oyolo',
                'provincia_id' => '050800',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => '050807',
                'nombre' => 'Pararca',
                'provincia_id' => '050800',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => '050808',
                'nombre' => 'San Javier de Alpabamba',
                'provincia_id' => '050800',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => '050809',
                'nombre' => 'San José de Ushua',
                'provincia_id' => '050800',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => '050810',
                'nombre' => 'Sara Sara',
                'provincia_id' => '050800',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => '050901',
                'nombre' => 'Querobamba',
                'provincia_id' => '050900',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => '050902',
                'nombre' => 'Belén',
                'provincia_id' => '050900',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => '050903',
                'nombre' => 'Chalcos',
                'provincia_id' => '050900',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => '050904',
                'nombre' => 'Chilcayoc',
                'provincia_id' => '050900',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => '050905',
                'nombre' => 'Huacaña',
                'provincia_id' => '050900',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => '050906',
                'nombre' => 'Morcolla',
                'provincia_id' => '050900',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => '050907',
                'nombre' => 'Paico',
                'provincia_id' => '050900',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => '050908',
                'nombre' => 'San Pedro de Larcay',
                'provincia_id' => '050900',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => '050909',
                'nombre' => 'San Salvador de Quije',
                'provincia_id' => '050900',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => '050910',
                'nombre' => 'Santiago de Paucaray',
                'provincia_id' => '050900',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => '050911',
                'nombre' => 'Soras',
                'provincia_id' => '050900',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => '051001',
                'nombre' => 'Huancapi',
                'provincia_id' => '051000',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => '051002',
                'nombre' => 'Alcamenca',
                'provincia_id' => '051000',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => '051003',
                'nombre' => 'Apongo',
                'provincia_id' => '051000',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => '051004',
                'nombre' => 'Asquipata',
                'provincia_id' => '051000',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => '051005',
                'nombre' => 'Canaria',
                'provincia_id' => '051000',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => '051006',
                'nombre' => 'Cayara',
                'provincia_id' => '051000',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => '051007',
                'nombre' => 'Colca',
                'provincia_id' => '051000',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => '051008',
                'nombre' => 'Huamanquiquia',
                'provincia_id' => '051000',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => '051009',
                'nombre' => 'Huancaraylla',
                'provincia_id' => '051000',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => '051010',
                'nombre' => 'Huaya',
                'provincia_id' => '051000',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => '051011',
                'nombre' => 'Sarhua',
                'provincia_id' => '051000',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => '051012',
                'nombre' => 'Vilcanchos',
                'provincia_id' => '051000',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => '051101',
                'nombre' => 'Vilcas Huaman',
                'provincia_id' => '051100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => '051102',
                'nombre' => 'Accomarca',
                'provincia_id' => '051100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => '051103',
                'nombre' => 'Carhuanca',
                'provincia_id' => '051100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => '051104',
                'nombre' => 'Concepción',
                'provincia_id' => '051100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => '051105',
                'nombre' => 'Huambalpa',
                'provincia_id' => '051100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => '051106',
                'nombre' => 'Independencia',
                'provincia_id' => '051100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => '051107',
                'nombre' => 'Saurama',
                'provincia_id' => '051100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => '051108',
                'nombre' => 'Vischongo',
                'provincia_id' => '051100',
                'departamento_id' => '050000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => '060101',
                'nombre' => 'Cajamarca',
                'provincia_id' => '060100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => '060102',
                'nombre' => 'Asunción',
                'provincia_id' => '060100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => '060103',
                'nombre' => 'Chetilla',
                'provincia_id' => '060100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => '060104',
                'nombre' => 'Cospan',
                'provincia_id' => '060100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => '060105',
                'nombre' => 'Encañada',
                'provincia_id' => '060100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => '060106',
                'nombre' => 'Jesús',
                'provincia_id' => '060100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => '060107',
                'nombre' => 'Llacanora',
                'provincia_id' => '060100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => '060108',
                'nombre' => 'Los Baños del Inca',
                'provincia_id' => '060100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => '060109',
                'nombre' => 'Magdalena',
                'provincia_id' => '060100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => '060110',
                'nombre' => 'Matara',
                'provincia_id' => '060100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => '060111',
                'nombre' => 'Namora',
                'provincia_id' => '060100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => '060112',
                'nombre' => 'San Juan',
                'provincia_id' => '060100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => '060201',
                'nombre' => 'Cajabamba',
                'provincia_id' => '060200',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => '060202',
                'nombre' => 'Cachachi',
                'provincia_id' => '060200',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => '060203',
                'nombre' => 'Condebamba',
                'provincia_id' => '060200',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => '060204',
                'nombre' => 'Sitacocha',
                'provincia_id' => '060200',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => '060301',
                'nombre' => 'Celendín',
                'provincia_id' => '060300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => '060302',
                'nombre' => 'Chumuch',
                'provincia_id' => '060300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => '060303',
                'nombre' => 'Cortegana',
                'provincia_id' => '060300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => '060304',
                'nombre' => 'Huasmin',
                'provincia_id' => '060300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => '060305',
                'nombre' => 'Jorge Chávez',
                'provincia_id' => '060300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => '060306',
                'nombre' => 'José Gálvez',
                'provincia_id' => '060300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => '060307',
                'nombre' => 'Miguel Iglesias',
                'provincia_id' => '060300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => '060308',
                'nombre' => 'Oxamarca',
                'provincia_id' => '060300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => '060309',
                'nombre' => 'Sorochuco',
                'provincia_id' => '060300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => '060310',
                'nombre' => 'Sucre',
                'provincia_id' => '060300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => '060311',
                'nombre' => 'Utco',
                'provincia_id' => '060300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => '060312',
                'nombre' => 'La Libertad de Pallan',
                'provincia_id' => '060300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => '060401',
                'nombre' => 'Chota',
                'provincia_id' => '060400',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => '060402',
                'nombre' => 'Anguia',
                'provincia_id' => '060400',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => '060403',
                'nombre' => 'Chadin',
                'provincia_id' => '060400',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => '060404',
                'nombre' => 'Chiguirip',
                'provincia_id' => '060400',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => '060405',
                'nombre' => 'Chimban',
                'provincia_id' => '060400',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => '060406',
                'nombre' => 'Choropampa',
                'provincia_id' => '060400',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => '060407',
                'nombre' => 'Cochabamba',
                'provincia_id' => '060400',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => '060408',
                'nombre' => 'Conchan',
                'provincia_id' => '060400',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => '060409',
                'nombre' => 'Huambos',
                'provincia_id' => '060400',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => '060410',
                'nombre' => 'Lajas',
                'provincia_id' => '060400',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => '060411',
                'nombre' => 'Llama',
                'provincia_id' => '060400',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => '060412',
                'nombre' => 'Miracosta',
                'provincia_id' => '060400',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => '060413',
                'nombre' => 'Paccha',
                'provincia_id' => '060400',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => '060414',
                'nombre' => 'Pion',
                'provincia_id' => '060400',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => '060415',
                'nombre' => 'Querocoto',
                'provincia_id' => '060400',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => '060416',
                'nombre' => 'San Juan de Licupis',
                'provincia_id' => '060400',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => '060417',
                'nombre' => 'Tacabamba',
                'provincia_id' => '060400',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => '060418',
                'nombre' => 'Tocmoche',
                'provincia_id' => '060400',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => '060419',
                'nombre' => 'Chalamarca',
                'provincia_id' => '060400',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => '060501',
                'nombre' => 'Contumaza',
                'provincia_id' => '060500',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => '060502',
                'nombre' => 'Chilete',
                'provincia_id' => '060500',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => '060503',
                'nombre' => 'Cupisnique',
                'provincia_id' => '060500',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => '060504',
                'nombre' => 'Guzmango',
                'provincia_id' => '060500',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => '060505',
                'nombre' => 'San Benito',
                'provincia_id' => '060500',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => '060506',
                'nombre' => 'Santa Cruz de Toledo',
                'provincia_id' => '060500',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => '060507',
                'nombre' => 'Tantarica',
                'provincia_id' => '060500',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => '060508',
                'nombre' => 'Yonan',
                'provincia_id' => '060500',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => '060601',
                'nombre' => 'Cutervo',
                'provincia_id' => '060600',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => '060602',
                'nombre' => 'Callayuc',
                'provincia_id' => '060600',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => '060603',
                'nombre' => 'Choros',
                'provincia_id' => '060600',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => '060604',
                'nombre' => 'Cujillo',
                'provincia_id' => '060600',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => '060605',
                'nombre' => 'La Ramada',
                'provincia_id' => '060600',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => '060606',
                'nombre' => 'Pimpingos',
                'provincia_id' => '060600',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => '060607',
                'nombre' => 'Querocotillo',
                'provincia_id' => '060600',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => '060608',
                'nombre' => 'San Andrés de Cutervo',
                'provincia_id' => '060600',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => '060609',
                'nombre' => 'San Juan de Cutervo',
                'provincia_id' => '060600',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => '060610',
                'nombre' => 'San Luis de Lucma',
                'provincia_id' => '060600',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => '060611',
                'nombre' => 'Santa Cruz',
                'provincia_id' => '060600',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => '060612',
                'nombre' => 'Santo Domingo de la Capilla',
                'provincia_id' => '060600',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => '060613',
                'nombre' => 'Santo Tomas',
                'provincia_id' => '060600',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => '060614',
                'nombre' => 'Socota',
                'provincia_id' => '060600',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => '060615',
                'nombre' => 'Toribio Casanova',
                'provincia_id' => '060600',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => '060701',
                'nombre' => 'Bambamarca',
                'provincia_id' => '060700',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => '060702',
                'nombre' => 'Chugur',
                'provincia_id' => '060700',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => '060703',
                'nombre' => 'Hualgayoc',
                'provincia_id' => '060700',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => '060801',
                'nombre' => 'Jaén',
                'provincia_id' => '060800',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => '060802',
                'nombre' => 'Bellavista',
                'provincia_id' => '060800',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => '060803',
                'nombre' => 'Chontali',
                'provincia_id' => '060800',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => '060804',
                'nombre' => 'Colasay',
                'provincia_id' => '060800',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => '060805',
                'nombre' => 'Huabal',
                'provincia_id' => '060800',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => '060806',
                'nombre' => 'Las Pirias',
                'provincia_id' => '060800',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => '060807',
                'nombre' => 'Pomahuaca',
                'provincia_id' => '060800',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => '060808',
                'nombre' => 'Pucara',
                'provincia_id' => '060800',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => '060809',
                'nombre' => 'Sallique',
                'provincia_id' => '060800',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => '060810',
                'nombre' => 'San Felipe',
                'provincia_id' => '060800',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => '060811',
                'nombre' => 'San José del Alto',
                'provincia_id' => '060800',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => '060812',
                'nombre' => 'Santa Rosa',
                'provincia_id' => '060800',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => '060901',
                'nombre' => 'San Ignacio',
                'provincia_id' => '060900',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => '060902',
                'nombre' => 'Chirinos',
                'provincia_id' => '060900',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => '060903',
                'nombre' => 'Huarango',
                'provincia_id' => '060900',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => '060904',
                'nombre' => 'La Coipa',
                'provincia_id' => '060900',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => '060905',
                'nombre' => 'Namballe',
                'provincia_id' => '060900',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => '060906',
                'nombre' => 'San José de Lourdes',
                'provincia_id' => '060900',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => '060907',
                'nombre' => 'Tabaconas',
                'provincia_id' => '060900',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => '061001',
                'nombre' => 'Pedro Gálvez',
                'provincia_id' => '061000',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => '061002',
                'nombre' => 'Chancay',
                'provincia_id' => '061000',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => '061003',
                'nombre' => 'Eduardo Villanueva',
                'provincia_id' => '061000',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => '061004',
                'nombre' => 'Gregorio Pita',
                'provincia_id' => '061000',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => '061005',
                'nombre' => 'Ichocan',
                'provincia_id' => '061000',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => '061006',
                'nombre' => 'José Manuel Quiroz',
                'provincia_id' => '061000',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => '061007',
                'nombre' => 'José Sabogal',
                'provincia_id' => '061000',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => '061101',
                'nombre' => 'San Miguel',
                'provincia_id' => '061100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => '061102',
                'nombre' => 'Bolívar',
                'provincia_id' => '061100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => '061103',
                'nombre' => 'Calquis',
                'provincia_id' => '061100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => '061104',
                'nombre' => 'Catilluc',
                'provincia_id' => '061100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => '061105',
                'nombre' => 'El Prado',
                'provincia_id' => '061100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => '061106',
                'nombre' => 'La Florida',
                'provincia_id' => '061100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => '061107',
                'nombre' => 'Llapa',
                'provincia_id' => '061100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => '061108',
                'nombre' => 'Nanchoc',
                'provincia_id' => '061100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => '061109',
                'nombre' => 'Niepos',
                'provincia_id' => '061100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => '061110',
                'nombre' => 'San Gregorio',
                'provincia_id' => '061100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => '061111',
                'nombre' => 'San Silvestre de Cochan',
                'provincia_id' => '061100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => '061112',
                'nombre' => 'Tongod',
                'provincia_id' => '061100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => '061113',
                'nombre' => 'Unión Agua Blanca',
                'provincia_id' => '061100',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => '061201',
                'nombre' => 'San Pablo',
                'provincia_id' => '061200',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => '061202',
                'nombre' => 'San Bernardino',
                'provincia_id' => '061200',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => '061203',
                'nombre' => 'San Luis',
                'provincia_id' => '061200',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => '061204',
                'nombre' => 'Tumbaden',
                'provincia_id' => '061200',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => '061301',
                'nombre' => 'Santa Cruz',
                'provincia_id' => '061300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => '061302',
                'nombre' => 'Andabamba',
                'provincia_id' => '061300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => '061303',
                'nombre' => 'Catache',
                'provincia_id' => '061300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => '061304',
                'nombre' => 'Chancaybaños',
                'provincia_id' => '061300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => '061305',
                'nombre' => 'La Esperanza',
                'provincia_id' => '061300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => '061306',
                'nombre' => 'Ninabamba',
                'provincia_id' => '061300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => '061307',
                'nombre' => 'Pulan',
                'provincia_id' => '061300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => '061308',
                'nombre' => 'Saucepampa',
                'provincia_id' => '061300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => '061309',
                'nombre' => 'Sexi',
                'provincia_id' => '061300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => '061310',
                'nombre' => 'Uticyacu',
                'provincia_id' => '061300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => '061311',
                'nombre' => 'Yauyucan',
                'provincia_id' => '061300',
                'departamento_id' => '060000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => '070101',
                'nombre' => 'Callao',
                'provincia_id' => '070100',
                'departamento_id' => '070000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => '070102',
                'nombre' => 'Bellavista',
                'provincia_id' => '070100',
                'departamento_id' => '070000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => '070103',
                'nombre' => 'Carmen de la Legua Reynoso',
                'provincia_id' => '070100',
                'departamento_id' => '070000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => '070104',
                'nombre' => 'La Perla',
                'provincia_id' => '070100',
                'departamento_id' => '070000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => '070105',
                'nombre' => 'La Punta',
                'provincia_id' => '070100',
                'departamento_id' => '070000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => '070106',
                'nombre' => 'Ventanilla',
                'provincia_id' => '070100',
                'departamento_id' => '070000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => '070107',
                'nombre' => 'Mi Perú',
                'provincia_id' => '070100',
                'departamento_id' => '070000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => '080101',
                'nombre' => 'Cusco',
                'provincia_id' => '080100',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => '080102',
                'nombre' => 'Ccorca',
                'provincia_id' => '080100',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => '080103',
                'nombre' => 'Poroy',
                'provincia_id' => '080100',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => '080104',
                'nombre' => 'San Jerónimo',
                'provincia_id' => '080100',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => '080105',
                'nombre' => 'San Sebastian',
                'provincia_id' => '080100',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => '080106',
                'nombre' => 'Santiago',
                'provincia_id' => '080100',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => '080107',
                'nombre' => 'Saylla',
                'provincia_id' => '080100',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => '080108',
                'nombre' => 'Wanchaq',
                'provincia_id' => '080100',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => '080201',
                'nombre' => 'Acomayo',
                'provincia_id' => '080200',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => '080202',
                'nombre' => 'Acopia',
                'provincia_id' => '080200',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => '080203',
                'nombre' => 'Acos',
                'provincia_id' => '080200',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => '080204',
                'nombre' => 'Mosoc Llacta',
                'provincia_id' => '080200',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => '080205',
                'nombre' => 'Pomacanchi',
                'provincia_id' => '080200',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => '080206',
                'nombre' => 'Rondocan',
                'provincia_id' => '080200',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => '080207',
                'nombre' => 'Sangarara',
                'provincia_id' => '080200',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => '080301',
                'nombre' => 'Anta',
                'provincia_id' => '080300',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => '080302',
                'nombre' => 'Ancahuasi',
                'provincia_id' => '080300',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => '080303',
                'nombre' => 'Cachimayo',
                'provincia_id' => '080300',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => '080304',
                'nombre' => 'Chinchaypujio',
                'provincia_id' => '080300',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => '080305',
                'nombre' => 'Huarocondo',
                'provincia_id' => '080300',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => '080306',
                'nombre' => 'Limatambo',
                'provincia_id' => '080300',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => '080307',
                'nombre' => 'Mollepata',
                'provincia_id' => '080300',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => '080308',
                'nombre' => 'Pucyura',
                'provincia_id' => '080300',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => '080309',
                'nombre' => 'Zurite',
                'provincia_id' => '080300',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => '080401',
                'nombre' => 'Calca',
                'provincia_id' => '080400',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => '080402',
                'nombre' => 'Coya',
                'provincia_id' => '080400',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => '080403',
                'nombre' => 'Lamay',
                'provincia_id' => '080400',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => '080404',
                'nombre' => 'Lares',
                'provincia_id' => '080400',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => '080405',
                'nombre' => 'Pisac',
                'provincia_id' => '080400',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => '080406',
                'nombre' => 'San Salvador',
                'provincia_id' => '080400',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => '080407',
                'nombre' => 'Taray',
                'provincia_id' => '080400',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => '080408',
                'nombre' => 'Yanatile',
                'provincia_id' => '080400',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => '080501',
                'nombre' => 'Yanaoca',
                'provincia_id' => '080500',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => '080502',
                'nombre' => 'Checca',
                'provincia_id' => '080500',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => '080503',
                'nombre' => 'Kunturkanki',
                'provincia_id' => '080500',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => '080504',
                'nombre' => 'Langui',
                'provincia_id' => '080500',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => '080505',
                'nombre' => 'Layo',
                'provincia_id' => '080500',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => '080506',
                'nombre' => 'Pampamarca',
                'provincia_id' => '080500',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => '080507',
                'nombre' => 'Quehue',
                'provincia_id' => '080500',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => '080508',
                'nombre' => 'Tupac Amaru',
                'provincia_id' => '080500',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => '080601',
                'nombre' => 'Sicuani',
                'provincia_id' => '080600',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => '080602',
                'nombre' => 'Checacupe',
                'provincia_id' => '080600',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => '080603',
                'nombre' => 'Combapata',
                'provincia_id' => '080600',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => '080604',
                'nombre' => 'Marangani',
                'provincia_id' => '080600',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => '080605',
                'nombre' => 'Pitumarca',
                'provincia_id' => '080600',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => '080606',
                'nombre' => 'San Pablo',
                'provincia_id' => '080600',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => '080607',
                'nombre' => 'San Pedro',
                'provincia_id' => '080600',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => '080608',
                'nombre' => 'Tinta',
                'provincia_id' => '080600',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => '080701',
                'nombre' => 'Santo Tomas',
                'provincia_id' => '080700',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => '080702',
                'nombre' => 'Capacmarca',
                'provincia_id' => '080700',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => '080703',
                'nombre' => 'Chamaca',
                'provincia_id' => '080700',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => '080704',
                'nombre' => 'Colquemarca',
                'provincia_id' => '080700',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => '080705',
                'nombre' => 'Livitaca',
                'provincia_id' => '080700',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => '080706',
                'nombre' => 'Llusco',
                'provincia_id' => '080700',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => '080707',
                'nombre' => 'Quiñota',
                'provincia_id' => '080700',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => '080708',
                'nombre' => 'Velille',
                'provincia_id' => '080700',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => '080801',
                'nombre' => 'Espinar',
                'provincia_id' => '080800',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => '080802',
                'nombre' => 'Condoroma',
                'provincia_id' => '080800',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => '080803',
                'nombre' => 'Coporaque',
                'provincia_id' => '080800',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => '080804',
                'nombre' => 'Ocoruro',
                'provincia_id' => '080800',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => '080805',
                'nombre' => 'Pallpata',
                'provincia_id' => '080800',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => '080806',
                'nombre' => 'Pichigua',
                'provincia_id' => '080800',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => '080807',
                'nombre' => 'Suyckutambo',
                'provincia_id' => '080800',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => '080808',
                'nombre' => 'Alto Pichigua',
                'provincia_id' => '080800',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => '080901',
                'nombre' => 'Santa Ana',
                'provincia_id' => '080900',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => '080902',
                'nombre' => 'Echarate',
                'provincia_id' => '080900',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => '080903',
                'nombre' => 'Huayopata',
                'provincia_id' => '080900',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => '080904',
                'nombre' => 'Maranura',
                'provincia_id' => '080900',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => '080905',
                'nombre' => 'Ocobamba',
                'provincia_id' => '080900',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => '080906',
                'nombre' => 'Quellouno',
                'provincia_id' => '080900',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => '080907',
                'nombre' => 'Kimbiri',
                'provincia_id' => '080900',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => '080908',
                'nombre' => 'Santa Teresa',
                'provincia_id' => '080900',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => '080909',
                'nombre' => 'Vilcabamba',
                'provincia_id' => '080900',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => '080910',
                'nombre' => 'Pichari',
                'provincia_id' => '080900',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => '080911',
                'nombre' => 'Inkawasi',
                'provincia_id' => '080900',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => '080912',
                'nombre' => 'Villa Virgen',
                'provincia_id' => '080900',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => '080913',
                'nombre' => 'Villa Kintiarina',
                'provincia_id' => '080900',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => '080914',
                'nombre' => 'Megantoni',
                'provincia_id' => '080900',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => '081001',
                'nombre' => 'Paruro',
                'provincia_id' => '081000',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => '081002',
                'nombre' => 'Accha',
                'provincia_id' => '081000',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => '081003',
                'nombre' => 'Ccapi',
                'provincia_id' => '081000',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => '081004',
                'nombre' => 'Colcha',
                'provincia_id' => '081000',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => '081005',
                'nombre' => 'Huanoquite',
                'provincia_id' => '081000',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => '081006',
                'nombre' => 'Omacha',
                'provincia_id' => '081000',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => '081007',
                'nombre' => 'Paccaritambo',
                'provincia_id' => '081000',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => '081008',
                'nombre' => 'Pillpinto',
                'provincia_id' => '081000',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => '081009',
                'nombre' => 'Yaurisque',
                'provincia_id' => '081000',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => '081101',
                'nombre' => 'Paucartambo',
                'provincia_id' => '081100',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => '081102',
                'nombre' => 'Caicay',
                'provincia_id' => '081100',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => '081103',
                'nombre' => 'Challabamba',
                'provincia_id' => '081100',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => '081104',
                'nombre' => 'Colquepata',
                'provincia_id' => '081100',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => '081105',
                'nombre' => 'Huancarani',
                'provincia_id' => '081100',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => '081106',
                'nombre' => 'Kosñipata',
                'provincia_id' => '081100',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => '081201',
                'nombre' => 'Urcos',
                'provincia_id' => '081200',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => '081202',
                'nombre' => 'Andahuaylillas',
                'provincia_id' => '081200',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => '081203',
                'nombre' => 'Camanti',
                'provincia_id' => '081200',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => '081204',
                'nombre' => 'Ccarhuayo',
                'provincia_id' => '081200',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => '081205',
                'nombre' => 'Ccatca',
                'provincia_id' => '081200',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => '081206',
                'nombre' => 'Cusipata',
                'provincia_id' => '081200',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => '081207',
                'nombre' => 'Huaro',
                'provincia_id' => '081200',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => '081208',
                'nombre' => 'Lucre',
                'provincia_id' => '081200',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => '081209',
                'nombre' => 'Marcapata',
                'provincia_id' => '081200',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => '081210',
                'nombre' => 'Ocongate',
                'provincia_id' => '081200',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => '081211',
                'nombre' => 'Oropesa',
                'provincia_id' => '081200',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => '081212',
                'nombre' => 'Quiquijana',
                'provincia_id' => '081200',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => '081301',
                'nombre' => 'Urubamba',
                'provincia_id' => '081300',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => '081302',
                'nombre' => 'Chinchero',
                'provincia_id' => '081300',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => '081303',
                'nombre' => 'Huayllabamba',
                'provincia_id' => '081300',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => '081304',
                'nombre' => 'Machupicchu',
                'provincia_id' => '081300',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => '081305',
                'nombre' => 'Maras',
                'provincia_id' => '081300',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => '081306',
                'nombre' => 'Ollantaytambo',
                'provincia_id' => '081300',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => '081307',
                'nombre' => 'Yucay',
                'provincia_id' => '081300',
                'departamento_id' => '080000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => '090101',
                'nombre' => 'Huancavelica',
                'provincia_id' => '090100',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => '090102',
                'nombre' => 'Acobambilla',
                'provincia_id' => '090100',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => '090103',
                'nombre' => 'Acoria',
                'provincia_id' => '090100',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => '090104',
                'nombre' => 'Conayca',
                'provincia_id' => '090100',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => '090105',
                'nombre' => 'Cuenca',
                'provincia_id' => '090100',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => '090106',
                'nombre' => 'Huachocolpa',
                'provincia_id' => '090100',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => '090107',
                'nombre' => 'Huayllahuara',
                'provincia_id' => '090100',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => '090108',
                'nombre' => 'Izcuchaca',
                'provincia_id' => '090100',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => '090109',
                'nombre' => 'Laria',
                'provincia_id' => '090100',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => '090110',
                'nombre' => 'Manta',
                'provincia_id' => '090100',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => '090111',
                'nombre' => 'Mariscal Cáceres',
                'provincia_id' => '090100',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => '090112',
                'nombre' => 'Moya',
                'provincia_id' => '090100',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => '090113',
                'nombre' => 'Nuevo Occoro',
                'provincia_id' => '090100',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => '090114',
                'nombre' => 'Palca',
                'provincia_id' => '090100',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => '090115',
                'nombre' => 'Pilchaca',
                'provincia_id' => '090100',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => '090116',
                'nombre' => 'Vilca',
                'provincia_id' => '090100',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => '090117',
                'nombre' => 'Yauli',
                'provincia_id' => '090100',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => '090118',
                'nombre' => 'Ascensión',
                'provincia_id' => '090100',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => '090119',
                'nombre' => 'Huando',
                'provincia_id' => '090100',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => '090201',
                'nombre' => 'Acobamba',
                'provincia_id' => '090200',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => '090202',
                'nombre' => 'Andabamba',
                'provincia_id' => '090200',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => '090203',
                'nombre' => 'Anta',
                'provincia_id' => '090200',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => '090204',
                'nombre' => 'Caja',
                'provincia_id' => '090200',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => '090205',
                'nombre' => 'Marcas',
                'provincia_id' => '090200',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => '090206',
                'nombre' => 'Paucara',
                'provincia_id' => '090200',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => '090207',
                'nombre' => 'Pomacocha',
                'provincia_id' => '090200',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => '090208',
                'nombre' => 'Rosario',
                'provincia_id' => '090200',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => '090301',
                'nombre' => 'Lircay',
                'provincia_id' => '090300',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => '090302',
                'nombre' => 'Anchonga',
                'provincia_id' => '090300',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => '090303',
                'nombre' => 'Callanmarca',
                'provincia_id' => '090300',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => '090304',
                'nombre' => 'Ccochaccasa',
                'provincia_id' => '090300',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => '090305',
                'nombre' => 'Chincho',
                'provincia_id' => '090300',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => '090306',
                'nombre' => 'Congalla',
                'provincia_id' => '090300',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => '090307',
                'nombre' => 'Huanca-Huanca',
                'provincia_id' => '090300',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => '090308',
                'nombre' => 'Huayllay Grande',
                'provincia_id' => '090300',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => '090309',
                'nombre' => 'Julcamarca',
                'provincia_id' => '090300',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => '090310',
                'nombre' => 'San Antonio de Antaparco',
                'provincia_id' => '090300',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => '090311',
                'nombre' => 'Santo Tomas de Pata',
                'provincia_id' => '090300',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => '090312',
                'nombre' => 'Secclla',
                'provincia_id' => '090300',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => '090401',
                'nombre' => 'Castrovirreyna',
                'provincia_id' => '090400',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => '090402',
                'nombre' => 'Arma',
                'provincia_id' => '090400',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => '090403',
                'nombre' => 'Aurahua',
                'provincia_id' => '090400',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => '090404',
                'nombre' => 'Capillas',
                'provincia_id' => '090400',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => '090405',
                'nombre' => 'Chupamarca',
                'provincia_id' => '090400',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => '090406',
                'nombre' => 'Cocas',
                'provincia_id' => '090400',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => '090407',
                'nombre' => 'Huachos',
                'provincia_id' => '090400',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => '090408',
                'nombre' => 'Huamatambo',
                'provincia_id' => '090400',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => '090409',
                'nombre' => 'Mollepampa',
                'provincia_id' => '090400',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => '090410',
                'nombre' => 'San Juan',
                'provincia_id' => '090400',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => '090411',
                'nombre' => 'Santa Ana',
                'provincia_id' => '090400',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => '090412',
                'nombre' => 'Tantara',
                'provincia_id' => '090400',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => '090413',
                'nombre' => 'Ticrapo',
                'provincia_id' => '090400',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => '090501',
                'nombre' => 'Churcampa',
                'provincia_id' => '090500',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => '090502',
                'nombre' => 'Anco',
                'provincia_id' => '090500',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => '090503',
                'nombre' => 'Chinchihuasi',
                'provincia_id' => '090500',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => '090504',
                'nombre' => 'El Carmen',
                'provincia_id' => '090500',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => '090505',
                'nombre' => 'La Merced',
                'provincia_id' => '090500',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => '090506',
                'nombre' => 'Locroja',
                'provincia_id' => '090500',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => '090507',
                'nombre' => 'Paucarbamba',
                'provincia_id' => '090500',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => '090508',
                'nombre' => 'San Miguel de Mayocc',
                'provincia_id' => '090500',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => '090509',
                'nombre' => 'San Pedro de Coris',
                'provincia_id' => '090500',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => '090510',
                'nombre' => 'Pachamarca',
                'provincia_id' => '090500',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => '090511',
                'nombre' => 'Cosme',
                'provincia_id' => '090500',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => '090601',
                'nombre' => 'Huaytara',
                'provincia_id' => '090600',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => '090602',
                'nombre' => 'Ayavi',
                'provincia_id' => '090600',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => '090603',
                'nombre' => 'Córdova',
                'provincia_id' => '090600',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => '090604',
                'nombre' => 'Huayacundo Arma',
                'provincia_id' => '090600',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => '090605',
                'nombre' => 'Laramarca',
                'provincia_id' => '090600',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => '090606',
                'nombre' => 'Ocoyo',
                'provincia_id' => '090600',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => '090607',
                'nombre' => 'Pilpichaca',
                'provincia_id' => '090600',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => '090608',
                'nombre' => 'Querco',
                'provincia_id' => '090600',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => '090609',
                'nombre' => 'Quito-Arma',
                'provincia_id' => '090600',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => '090610',
                'nombre' => 'San Antonio de Cusicancha',
                'provincia_id' => '090600',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => '090611',
                'nombre' => 'San Francisco de Sangayaico',
                'provincia_id' => '090600',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => '090612',
                'nombre' => 'San Isidro',
                'provincia_id' => '090600',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => '090613',
                'nombre' => 'Santiago de Chocorvos',
                'provincia_id' => '090600',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => '090614',
                'nombre' => 'Santiago de Quirahuara',
                'provincia_id' => '090600',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => '090615',
                'nombre' => 'Santo Domingo de Capillas',
                'provincia_id' => '090600',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => '090616',
                'nombre' => 'Tambo',
                'provincia_id' => '090600',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => '090701',
                'nombre' => 'Pampas',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => '090702',
                'nombre' => 'Acostambo',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => '090703',
                'nombre' => 'Acraquia',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => '090704',
                'nombre' => 'Ahuaycha',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => '090705',
                'nombre' => 'Colcabamba',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => '090706',
                'nombre' => 'Daniel Hernández',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => '090707',
                'nombre' => 'Huachocolpa',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => '090709',
                'nombre' => 'Huaribamba',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => '090710',
                'nombre' => 'Ñahuimpuquio',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => '090711',
                'nombre' => 'Pazos',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => '090713',
                'nombre' => 'Quishuar',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => '090714',
                'nombre' => 'Salcabamba',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => '090715',
                'nombre' => 'Salcahuasi',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => '090716',
                'nombre' => 'San Marcos de Rocchac',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => '090717',
                'nombre' => 'Surcubamba',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => '090718',
                'nombre' => 'Tintay Puncu',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => '090719',
                'nombre' => 'Quichuas',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => '090720',
                'nombre' => 'Andaymarca',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => '090721',
                'nombre' => 'Roble',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => '090722',
                'nombre' => 'Pichos',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => '090723',
                'nombre' => 'Santiago de Tucuma',
                'provincia_id' => '090700',
                'departamento_id' => '090000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => '100101',
                'nombre' => 'Huanuco',
                'provincia_id' => '100100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => '100102',
                'nombre' => 'Amarilis',
                'provincia_id' => '100100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => '100103',
                'nombre' => 'Chinchao',
                'provincia_id' => '100100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => '100104',
                'nombre' => 'Churubamba',
                'provincia_id' => '100100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => '100105',
                'nombre' => 'Margos',
                'provincia_id' => '100100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => '100106',
            'nombre' => 'Quisqui (Kichki)',
                'provincia_id' => '100100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => '100107',
                'nombre' => 'San Francisco de Cayran',
                'provincia_id' => '100100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => '100108',
                'nombre' => 'San Pedro de Chaulan',
                'provincia_id' => '100100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => '100109',
                'nombre' => 'Santa María del Valle',
                'provincia_id' => '100100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => '100110',
                'nombre' => 'Yarumayo',
                'provincia_id' => '100100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => '100111',
                'nombre' => 'Pillco Marca',
                'provincia_id' => '100100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => '100112',
                'nombre' => 'Yacus',
                'provincia_id' => '100100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => '100113',
                'nombre' => 'San Pablo de Pillao',
                'provincia_id' => '100100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => '100201',
                'nombre' => 'Ambo',
                'provincia_id' => '100200',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => '100202',
                'nombre' => 'Cayna',
                'provincia_id' => '100200',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => '100203',
                'nombre' => 'Colpas',
                'provincia_id' => '100200',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => '100204',
                'nombre' => 'Conchamarca',
                'provincia_id' => '100200',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => '100205',
                'nombre' => 'Huacar',
                'provincia_id' => '100200',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => '100206',
                'nombre' => 'San Francisco',
                'provincia_id' => '100200',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => '100207',
                'nombre' => 'San Rafael',
                'provincia_id' => '100200',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => '100208',
                'nombre' => 'Tomay Kichwa',
                'provincia_id' => '100200',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => '100301',
                'nombre' => 'La Unión',
                'provincia_id' => '100300',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => '100307',
                'nombre' => 'Chuquis',
                'provincia_id' => '100300',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => '100311',
                'nombre' => 'Marías',
                'provincia_id' => '100300',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => '100313',
                'nombre' => 'Pachas',
                'provincia_id' => '100300',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => '100316',
                'nombre' => 'Quivilla',
                'provincia_id' => '100300',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => '100317',
                'nombre' => 'Ripan',
                'provincia_id' => '100300',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => '100321',
                'nombre' => 'Shunqui',
                'provincia_id' => '100300',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => '100322',
                'nombre' => 'Sillapata',
                'provincia_id' => '100300',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => '100323',
                'nombre' => 'Yanas',
                'provincia_id' => '100300',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => '100401',
                'nombre' => 'Huacaybamba',
                'provincia_id' => '100400',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => '100402',
                'nombre' => 'Canchabamba',
                'provincia_id' => '100400',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => '100403',
                'nombre' => 'Cochabamba',
                'provincia_id' => '100400',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => '100404',
                'nombre' => 'Pinra',
                'provincia_id' => '100400',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => '100501',
                'nombre' => 'Llata',
                'provincia_id' => '100500',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => '100502',
                'nombre' => 'Arancay',
                'provincia_id' => '100500',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => '100503',
                'nombre' => 'Chavín de Pariarca',
                'provincia_id' => '100500',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => '100504',
                'nombre' => 'Jacas Grande',
                'provincia_id' => '100500',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => '100505',
                'nombre' => 'Jircan',
                'provincia_id' => '100500',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => '100506',
                'nombre' => 'Miraflores',
                'provincia_id' => '100500',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => '100507',
                'nombre' => 'Monzón',
                'provincia_id' => '100500',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => '100508',
                'nombre' => 'Punchao',
                'provincia_id' => '100500',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => '100509',
                'nombre' => 'Puños',
                'provincia_id' => '100500',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => '100510',
                'nombre' => 'Singa',
                'provincia_id' => '100500',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => '100511',
                'nombre' => 'Tantamayo',
                'provincia_id' => '100500',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => '100601',
                'nombre' => 'Rupa-Rupa',
                'provincia_id' => '100600',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => '100602',
                'nombre' => 'Daniel Alomía Robles',
                'provincia_id' => '100600',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => '100603',
                'nombre' => 'Hermílio Valdizan',
                'provincia_id' => '100600',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => '100604',
                'nombre' => 'José Crespo y Castillo',
                'provincia_id' => '100600',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => '100605',
                'nombre' => 'Luyando',
                'provincia_id' => '100600',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => '100606',
                'nombre' => 'Mariano Damaso Beraun',
                'provincia_id' => '100600',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => '100607',
                'nombre' => 'Pucayacu',
                'provincia_id' => '100600',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => '100608',
                'nombre' => 'Castillo Grande',
                'provincia_id' => '100600',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => '100609',
                'nombre' => 'Pueblo Nuevo',
                'provincia_id' => '100600',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => '100610',
                'nombre' => 'Santo Domingo de Anda',
                'provincia_id' => '100600',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => '100701',
                'nombre' => 'Huacrachuco',
                'provincia_id' => '100700',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => '100702',
                'nombre' => 'Cholon',
                'provincia_id' => '100700',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => '100703',
                'nombre' => 'San Buenaventura',
                'provincia_id' => '100700',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => '100704',
                'nombre' => 'La Morada',
                'provincia_id' => '100700',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => '100705',
                'nombre' => 'Santa Rosa de Alto Yanajanca',
                'provincia_id' => '100700',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => '100801',
                'nombre' => 'Panao',
                'provincia_id' => '100800',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => '100802',
                'nombre' => 'Chaglla',
                'provincia_id' => '100800',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => '100803',
                'nombre' => 'Molino',
                'provincia_id' => '100800',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => '100804',
                'nombre' => 'Umari',
                'provincia_id' => '100800',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => '100901',
                'nombre' => 'Puerto Inca',
                'provincia_id' => '100900',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => '100902',
                'nombre' => 'Codo del Pozuzo',
                'provincia_id' => '100900',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => '100903',
                'nombre' => 'Honoria',
                'provincia_id' => '100900',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => '100904',
                'nombre' => 'Tournavista',
                'provincia_id' => '100900',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => '100905',
                'nombre' => 'Yuyapichis',
                'provincia_id' => '100900',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => '101001',
                'nombre' => 'Jesús',
                'provincia_id' => '101000',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => '101002',
                'nombre' => 'Baños',
                'provincia_id' => '101000',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => '101003',
                'nombre' => 'Jivia',
                'provincia_id' => '101000',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => '101004',
                'nombre' => 'Queropalca',
                'provincia_id' => '101000',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => '101005',
                'nombre' => 'Rondos',
                'provincia_id' => '101000',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => '101006',
                'nombre' => 'San Francisco de Asís',
                'provincia_id' => '101000',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => '101007',
                'nombre' => 'San Miguel de Cauri',
                'provincia_id' => '101000',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => '101101',
                'nombre' => 'Chavinillo',
                'provincia_id' => '101100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => '101102',
                'nombre' => 'Cahuac',
                'provincia_id' => '101100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => '101103',
                'nombre' => 'Chacabamba',
                'provincia_id' => '101100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => '101104',
                'nombre' => 'Aparicio Pomares',
                'provincia_id' => '101100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => '101105',
                'nombre' => 'Jacas Chico',
                'provincia_id' => '101100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => '101106',
                'nombre' => 'Obas',
                'provincia_id' => '101100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => '101107',
                'nombre' => 'Pampamarca',
                'provincia_id' => '101100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => '101108',
                'nombre' => 'Choras',
                'provincia_id' => '101100',
                'departamento_id' => '100000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => '110101',
                'nombre' => 'Ica',
                'provincia_id' => '110100',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => '110102',
                'nombre' => 'La Tinguiña',
                'provincia_id' => '110100',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => '110103',
                'nombre' => 'Los Aquijes',
                'provincia_id' => '110100',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => '110104',
                'nombre' => 'Ocucaje',
                'provincia_id' => '110100',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => '110105',
                'nombre' => 'Pachacutec',
                'provincia_id' => '110100',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => '110106',
                'nombre' => 'Parcona',
                'provincia_id' => '110100',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => '110107',
                'nombre' => 'Pueblo Nuevo',
                'provincia_id' => '110100',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => '110108',
                'nombre' => 'Salas',
                'provincia_id' => '110100',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('distritos')->insert(array (
            0 => 
            array (
                'id' => '110109',
                'nombre' => 'San José de Los Molinos',
                'provincia_id' => '110100',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => '110110',
                'nombre' => 'San Juan Bautista',
                'provincia_id' => '110100',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => '110111',
                'nombre' => 'Santiago',
                'provincia_id' => '110100',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => '110112',
                'nombre' => 'Subtanjalla',
                'provincia_id' => '110100',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => '110113',
                'nombre' => 'Tate',
                'provincia_id' => '110100',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => '110114',
                'nombre' => 'Yauca del Rosario',
                'provincia_id' => '110100',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => '110201',
                'nombre' => 'Chincha Alta',
                'provincia_id' => '110200',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => '110202',
                'nombre' => 'Alto Laran',
                'provincia_id' => '110200',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => '110203',
                'nombre' => 'Chavin',
                'provincia_id' => '110200',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => '110204',
                'nombre' => 'Chincha Baja',
                'provincia_id' => '110200',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => '110205',
                'nombre' => 'El Carmen',
                'provincia_id' => '110200',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => '110206',
                'nombre' => 'Grocio Prado',
                'provincia_id' => '110200',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => '110207',
                'nombre' => 'Pueblo Nuevo',
                'provincia_id' => '110200',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => '110208',
                'nombre' => 'San Juan de Yanac',
                'provincia_id' => '110200',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => '110209',
                'nombre' => 'San Pedro de Huacarpana',
                'provincia_id' => '110200',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => '110210',
                'nombre' => 'Sunampe',
                'provincia_id' => '110200',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => '110211',
                'nombre' => 'Tambo de Mora',
                'provincia_id' => '110200',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => '110301',
                'nombre' => 'Nasca',
                'provincia_id' => '110300',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => '110302',
                'nombre' => 'Changuillo',
                'provincia_id' => '110300',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => '110303',
                'nombre' => 'El Ingenio',
                'provincia_id' => '110300',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => '110304',
                'nombre' => 'Marcona',
                'provincia_id' => '110300',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => '110305',
                'nombre' => 'Vista Alegre',
                'provincia_id' => '110300',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => '110401',
                'nombre' => 'Palpa',
                'provincia_id' => '110400',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => '110402',
                'nombre' => 'Llipata',
                'provincia_id' => '110400',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => '110403',
                'nombre' => 'Río Grande',
                'provincia_id' => '110400',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => '110404',
                'nombre' => 'Santa Cruz',
                'provincia_id' => '110400',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => '110405',
                'nombre' => 'Tibillo',
                'provincia_id' => '110400',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => '110501',
                'nombre' => 'Pisco',
                'provincia_id' => '110500',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => '110502',
                'nombre' => 'Huancano',
                'provincia_id' => '110500',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => '110503',
                'nombre' => 'Humay',
                'provincia_id' => '110500',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => '110504',
                'nombre' => 'Independencia',
                'provincia_id' => '110500',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => '110505',
                'nombre' => 'Paracas',
                'provincia_id' => '110500',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => '110506',
                'nombre' => 'San Andrés',
                'provincia_id' => '110500',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => '110507',
                'nombre' => 'San Clemente',
                'provincia_id' => '110500',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => '110508',
                'nombre' => 'Tupac Amaru Inca',
                'provincia_id' => '110500',
                'departamento_id' => '110000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => '120101',
                'nombre' => 'Huancayo',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => '120104',
                'nombre' => 'Carhuacallanga',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => '120105',
                'nombre' => 'Chacapampa',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => '120106',
                'nombre' => 'Chicche',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => '120107',
                'nombre' => 'Chilca',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => '120108',
                'nombre' => 'Chongos Alto',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => '120111',
                'nombre' => 'Chupuro',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => '120112',
                'nombre' => 'Colca',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => '120113',
                'nombre' => 'Cullhuas',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => '120114',
                'nombre' => 'El Tambo',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => '120116',
                'nombre' => 'Huacrapuquio',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => '120117',
                'nombre' => 'Hualhuas',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => '120119',
                'nombre' => 'Huancan',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => '120120',
                'nombre' => 'Huasicancha',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => '120121',
                'nombre' => 'Huayucachi',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => '120122',
                'nombre' => 'Ingenio',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => '120124',
                'nombre' => 'Pariahuanca',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => '120125',
                'nombre' => 'Pilcomayo',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => '120126',
                'nombre' => 'Pucara',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => '120127',
                'nombre' => 'Quichuay',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => '120128',
                'nombre' => 'Quilcas',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => '120129',
                'nombre' => 'San Agustín',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => '120130',
                'nombre' => 'San Jerónimo de Tunan',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => '120132',
                'nombre' => 'Saño',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => '120133',
                'nombre' => 'Sapallanga',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => '120134',
                'nombre' => 'Sicaya',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => '120135',
                'nombre' => 'Santo Domingo de Acobamba',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => '120136',
                'nombre' => 'Viques',
                'provincia_id' => '120100',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => '120201',
                'nombre' => 'Concepción',
                'provincia_id' => '120200',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => '120202',
                'nombre' => 'Aco',
                'provincia_id' => '120200',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => '120203',
                'nombre' => 'Andamarca',
                'provincia_id' => '120200',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => '120204',
                'nombre' => 'Chambara',
                'provincia_id' => '120200',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => '120205',
                'nombre' => 'Cochas',
                'provincia_id' => '120200',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => '120206',
                'nombre' => 'Comas',
                'provincia_id' => '120200',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => '120207',
                'nombre' => 'Heroínas Toledo',
                'provincia_id' => '120200',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => '120208',
                'nombre' => 'Manzanares',
                'provincia_id' => '120200',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => '120209',
                'nombre' => 'Mariscal Castilla',
                'provincia_id' => '120200',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => '120210',
                'nombre' => 'Matahuasi',
                'provincia_id' => '120200',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => '120211',
                'nombre' => 'Mito',
                'provincia_id' => '120200',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => '120212',
                'nombre' => 'Nueve de Julio',
                'provincia_id' => '120200',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => '120213',
                'nombre' => 'Orcotuna',
                'provincia_id' => '120200',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => '120214',
                'nombre' => 'San José de Quero',
                'provincia_id' => '120200',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => '120215',
                'nombre' => 'Santa Rosa de Ocopa',
                'provincia_id' => '120200',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => '120301',
                'nombre' => 'Chanchamayo',
                'provincia_id' => '120300',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => '120302',
                'nombre' => 'Perene',
                'provincia_id' => '120300',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => '120303',
                'nombre' => 'Pichanaqui',
                'provincia_id' => '120300',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => '120304',
                'nombre' => 'San Luis de Shuaro',
                'provincia_id' => '120300',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => '120305',
                'nombre' => 'San Ramón',
                'provincia_id' => '120300',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => '120306',
                'nombre' => 'Vitoc',
                'provincia_id' => '120300',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => '120401',
                'nombre' => 'Jauja',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => '120402',
                'nombre' => 'Acolla',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => '120403',
                'nombre' => 'Apata',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => '120404',
                'nombre' => 'Ataura',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => '120405',
                'nombre' => 'Canchayllo',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => '120406',
                'nombre' => 'Curicaca',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => '120407',
                'nombre' => 'El Mantaro',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => '120408',
                'nombre' => 'Huamali',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => '120409',
                'nombre' => 'Huaripampa',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => '120410',
                'nombre' => 'Huertas',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => '120411',
                'nombre' => 'Janjaillo',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => '120412',
                'nombre' => 'Julcán',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => '120413',
                'nombre' => 'Leonor Ordóñez',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => '120414',
                'nombre' => 'Llocllapampa',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => '120415',
                'nombre' => 'Marco',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => '120416',
                'nombre' => 'Masma',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => '120417',
                'nombre' => 'Masma Chicche',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => '120418',
                'nombre' => 'Molinos',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => '120419',
                'nombre' => 'Monobamba',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => '120420',
                'nombre' => 'Muqui',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => '120421',
                'nombre' => 'Muquiyauyo',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => '120422',
                'nombre' => 'Paca',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => '120423',
                'nombre' => 'Paccha',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => '120424',
                'nombre' => 'Pancan',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => '120425',
                'nombre' => 'Parco',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => '120426',
                'nombre' => 'Pomacancha',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => '120427',
                'nombre' => 'Ricran',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => '120428',
                'nombre' => 'San Lorenzo',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => '120429',
                'nombre' => 'San Pedro de Chunan',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => '120430',
                'nombre' => 'Sausa',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => '120431',
                'nombre' => 'Sincos',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => '120432',
                'nombre' => 'Tunan Marca',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => '120433',
                'nombre' => 'Yauli',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => '120434',
                'nombre' => 'Yauyos',
                'provincia_id' => '120400',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => '120501',
                'nombre' => 'Junin',
                'provincia_id' => '120500',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => '120502',
                'nombre' => 'Carhuamayo',
                'provincia_id' => '120500',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => '120503',
                'nombre' => 'Ondores',
                'provincia_id' => '120500',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => '120504',
                'nombre' => 'Ulcumayo',
                'provincia_id' => '120500',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => '120601',
                'nombre' => 'Satipo',
                'provincia_id' => '120600',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => '120602',
                'nombre' => 'Coviriali',
                'provincia_id' => '120600',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => '120603',
                'nombre' => 'Llaylla',
                'provincia_id' => '120600',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => '120604',
                'nombre' => 'Mazamari',
                'provincia_id' => '120600',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => '120605',
                'nombre' => 'Pampa Hermosa',
                'provincia_id' => '120600',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => '120606',
                'nombre' => 'Pangoa',
                'provincia_id' => '120600',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => '120607',
                'nombre' => 'Río Negro',
                'provincia_id' => '120600',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => '120608',
                'nombre' => 'Río Tambo',
                'provincia_id' => '120600',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => '120609',
                'nombre' => 'Vizcatan del Ene',
                'provincia_id' => '120600',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => '120701',
                'nombre' => 'Tarma',
                'provincia_id' => '120700',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => '120702',
                'nombre' => 'Acobamba',
                'provincia_id' => '120700',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => '120703',
                'nombre' => 'Huaricolca',
                'provincia_id' => '120700',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => '120704',
                'nombre' => 'Huasahuasi',
                'provincia_id' => '120700',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => '120705',
                'nombre' => 'La Unión',
                'provincia_id' => '120700',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => '120706',
                'nombre' => 'Palca',
                'provincia_id' => '120700',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => '120707',
                'nombre' => 'Palcamayo',
                'provincia_id' => '120700',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => '120708',
                'nombre' => 'San Pedro de Cajas',
                'provincia_id' => '120700',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => '120709',
                'nombre' => 'Tapo',
                'provincia_id' => '120700',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => '120801',
                'nombre' => 'La Oroya',
                'provincia_id' => '120800',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => '120802',
                'nombre' => 'Chacapalpa',
                'provincia_id' => '120800',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => '120803',
                'nombre' => 'Huay-Huay',
                'provincia_id' => '120800',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => '120804',
                'nombre' => 'Marcapomacocha',
                'provincia_id' => '120800',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => '120805',
                'nombre' => 'Morococha',
                'provincia_id' => '120800',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => '120806',
                'nombre' => 'Paccha',
                'provincia_id' => '120800',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => '120807',
                'nombre' => 'Santa Bárbara de Carhuacayan',
                'provincia_id' => '120800',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => '120808',
                'nombre' => 'Santa Rosa de Sacco',
                'provincia_id' => '120800',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => '120809',
                'nombre' => 'Suitucancha',
                'provincia_id' => '120800',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => '120810',
                'nombre' => 'Yauli',
                'provincia_id' => '120800',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => '120901',
                'nombre' => 'Chupaca',
                'provincia_id' => '120900',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => '120902',
                'nombre' => 'Ahuac',
                'provincia_id' => '120900',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => '120903',
                'nombre' => 'Chongos Bajo',
                'provincia_id' => '120900',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => '120904',
                'nombre' => 'Huachac',
                'provincia_id' => '120900',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => '120905',
                'nombre' => 'Huamancaca Chico',
                'provincia_id' => '120900',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => '120906',
                'nombre' => 'San Juan de Iscos',
                'provincia_id' => '120900',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => '120907',
                'nombre' => 'San Juan de Jarpa',
                'provincia_id' => '120900',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => '120908',
                'nombre' => 'Tres de Diciembre',
                'provincia_id' => '120900',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => '120909',
                'nombre' => 'Yanacancha',
                'provincia_id' => '120900',
                'departamento_id' => '120000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => '130101',
                'nombre' => 'Trujillo',
                'provincia_id' => '130100',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => '130102',
                'nombre' => 'El Porvenir',
                'provincia_id' => '130100',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => '130103',
                'nombre' => 'Florencia de Mora',
                'provincia_id' => '130100',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => '130104',
                'nombre' => 'Huanchaco',
                'provincia_id' => '130100',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => '130105',
                'nombre' => 'La Esperanza',
                'provincia_id' => '130100',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => '130106',
                'nombre' => 'Laredo',
                'provincia_id' => '130100',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => '130107',
                'nombre' => 'Moche',
                'provincia_id' => '130100',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => '130108',
                'nombre' => 'Poroto',
                'provincia_id' => '130100',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => '130109',
                'nombre' => 'Salaverry',
                'provincia_id' => '130100',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => '130110',
                'nombre' => 'Simbal',
                'provincia_id' => '130100',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => '130111',
                'nombre' => 'Victor Larco Herrera',
                'provincia_id' => '130100',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => '130201',
                'nombre' => 'Ascope',
                'provincia_id' => '130200',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => '130202',
                'nombre' => 'Chicama',
                'provincia_id' => '130200',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => '130203',
                'nombre' => 'Chocope',
                'provincia_id' => '130200',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => '130204',
                'nombre' => 'Magdalena de Cao',
                'provincia_id' => '130200',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => '130205',
                'nombre' => 'Paijan',
                'provincia_id' => '130200',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => '130206',
                'nombre' => 'Rázuri',
                'provincia_id' => '130200',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => '130207',
                'nombre' => 'Santiago de Cao',
                'provincia_id' => '130200',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => '130208',
                'nombre' => 'Casa Grande',
                'provincia_id' => '130200',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => '130301',
                'nombre' => 'Bolívar',
                'provincia_id' => '130300',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => '130302',
                'nombre' => 'Bambamarca',
                'provincia_id' => '130300',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => '130303',
                'nombre' => 'Condormarca',
                'provincia_id' => '130300',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => '130304',
                'nombre' => 'Longotea',
                'provincia_id' => '130300',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => '130305',
                'nombre' => 'Uchumarca',
                'provincia_id' => '130300',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => '130306',
                'nombre' => 'Ucuncha',
                'provincia_id' => '130300',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => '130401',
                'nombre' => 'Chepen',
                'provincia_id' => '130400',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => '130402',
                'nombre' => 'Pacanga',
                'provincia_id' => '130400',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => '130403',
                'nombre' => 'Pueblo Nuevo',
                'provincia_id' => '130400',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => '130501',
                'nombre' => 'Julcan',
                'provincia_id' => '130500',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => '130502',
                'nombre' => 'Calamarca',
                'provincia_id' => '130500',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => '130503',
                'nombre' => 'Carabamba',
                'provincia_id' => '130500',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => '130504',
                'nombre' => 'Huaso',
                'provincia_id' => '130500',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => '130601',
                'nombre' => 'Otuzco',
                'provincia_id' => '130600',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => '130602',
                'nombre' => 'Agallpampa',
                'provincia_id' => '130600',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => '130604',
                'nombre' => 'Charat',
                'provincia_id' => '130600',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => '130605',
                'nombre' => 'Huaranchal',
                'provincia_id' => '130600',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => '130606',
                'nombre' => 'La Cuesta',
                'provincia_id' => '130600',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => '130608',
                'nombre' => 'Mache',
                'provincia_id' => '130600',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => '130610',
                'nombre' => 'Paranday',
                'provincia_id' => '130600',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => '130611',
                'nombre' => 'Salpo',
                'provincia_id' => '130600',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => '130613',
                'nombre' => 'Sinsicap',
                'provincia_id' => '130600',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => '130614',
                'nombre' => 'Usquil',
                'provincia_id' => '130600',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => '130701',
                'nombre' => 'San Pedro de Lloc',
                'provincia_id' => '130700',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => '130702',
                'nombre' => 'Guadalupe',
                'provincia_id' => '130700',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => '130703',
                'nombre' => 'Jequetepeque',
                'provincia_id' => '130700',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => '130704',
                'nombre' => 'Pacasmayo',
                'provincia_id' => '130700',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => '130705',
                'nombre' => 'San José',
                'provincia_id' => '130700',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => '130801',
                'nombre' => 'Tayabamba',
                'provincia_id' => '130800',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => '130802',
                'nombre' => 'Buldibuyo',
                'provincia_id' => '130800',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => '130803',
                'nombre' => 'Chillia',
                'provincia_id' => '130800',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => '130804',
                'nombre' => 'Huancaspata',
                'provincia_id' => '130800',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => '130805',
                'nombre' => 'Huaylillas',
                'provincia_id' => '130800',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => '130806',
                'nombre' => 'Huayo',
                'provincia_id' => '130800',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => '130807',
                'nombre' => 'Ongon',
                'provincia_id' => '130800',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => '130808',
                'nombre' => 'Parcoy',
                'provincia_id' => '130800',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => '130809',
                'nombre' => 'Pataz',
                'provincia_id' => '130800',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => '130810',
                'nombre' => 'Pias',
                'provincia_id' => '130800',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => '130811',
                'nombre' => 'Santiago de Challas',
                'provincia_id' => '130800',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => '130812',
                'nombre' => 'Taurija',
                'provincia_id' => '130800',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => '130813',
                'nombre' => 'Urpay',
                'provincia_id' => '130800',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => '130901',
                'nombre' => 'Huamachuco',
                'provincia_id' => '130900',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => '130902',
                'nombre' => 'Chugay',
                'provincia_id' => '130900',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => '130903',
                'nombre' => 'Cochorco',
                'provincia_id' => '130900',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => '130904',
                'nombre' => 'Curgos',
                'provincia_id' => '130900',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => '130905',
                'nombre' => 'Marcabal',
                'provincia_id' => '130900',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => '130906',
                'nombre' => 'Sanagoran',
                'provincia_id' => '130900',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => '130907',
                'nombre' => 'Sarin',
                'provincia_id' => '130900',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => '130908',
                'nombre' => 'Sartimbamba',
                'provincia_id' => '130900',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => '131001',
                'nombre' => 'Santiago de Chuco',
                'provincia_id' => '131000',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => '131002',
                'nombre' => 'Angasmarca',
                'provincia_id' => '131000',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => '131003',
                'nombre' => 'Cachicadan',
                'provincia_id' => '131000',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => '131004',
                'nombre' => 'Mollebamba',
                'provincia_id' => '131000',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => '131005',
                'nombre' => 'Mollepata',
                'provincia_id' => '131000',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => '131006',
                'nombre' => 'Quiruvilca',
                'provincia_id' => '131000',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => '131007',
                'nombre' => 'Santa Cruz de Chuca',
                'provincia_id' => '131000',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => '131008',
                'nombre' => 'Sitabamba',
                'provincia_id' => '131000',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => '131101',
                'nombre' => 'Cascas',
                'provincia_id' => '131100',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => '131102',
                'nombre' => 'Lucma',
                'provincia_id' => '131100',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => '131103',
                'nombre' => 'Marmot',
                'provincia_id' => '131100',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => '131104',
                'nombre' => 'Sayapullo',
                'provincia_id' => '131100',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => '131201',
                'nombre' => 'Viru',
                'provincia_id' => '131200',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => '131202',
                'nombre' => 'Chao',
                'provincia_id' => '131200',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => '131203',
                'nombre' => 'Guadalupito',
                'provincia_id' => '131200',
                'departamento_id' => '130000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => '140101',
                'nombre' => 'Chiclayo',
                'provincia_id' => '140100',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => '140102',
                'nombre' => 'Chongoyape',
                'provincia_id' => '140100',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => '140103',
                'nombre' => 'Eten',
                'provincia_id' => '140100',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => '140104',
                'nombre' => 'Eten Puerto',
                'provincia_id' => '140100',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => '140105',
                'nombre' => 'José Leonardo Ortiz',
                'provincia_id' => '140100',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => '140106',
                'nombre' => 'La Victoria',
                'provincia_id' => '140100',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => '140107',
                'nombre' => 'Lagunas',
                'provincia_id' => '140100',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => '140108',
                'nombre' => 'Monsefu',
                'provincia_id' => '140100',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => '140109',
                'nombre' => 'Nueva Arica',
                'provincia_id' => '140100',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => '140110',
                'nombre' => 'Oyotun',
                'provincia_id' => '140100',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => '140111',
                'nombre' => 'Picsi',
                'provincia_id' => '140100',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => '140112',
                'nombre' => 'Pimentel',
                'provincia_id' => '140100',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => '140113',
                'nombre' => 'Reque',
                'provincia_id' => '140100',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => '140114',
                'nombre' => 'Santa Rosa',
                'provincia_id' => '140100',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => '140115',
                'nombre' => 'Saña',
                'provincia_id' => '140100',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => '140116',
                'nombre' => 'Cayalti',
                'provincia_id' => '140100',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => '140117',
                'nombre' => 'Patapo',
                'provincia_id' => '140100',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => '140118',
                'nombre' => 'Pomalca',
                'provincia_id' => '140100',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => '140119',
                'nombre' => 'Pucala',
                'provincia_id' => '140100',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => '140120',
                'nombre' => 'Tuman',
                'provincia_id' => '140100',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => '140201',
                'nombre' => 'Ferreñafe',
                'provincia_id' => '140200',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => '140202',
                'nombre' => 'Cañaris',
                'provincia_id' => '140200',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => '140203',
                'nombre' => 'Incahuasi',
                'provincia_id' => '140200',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => '140204',
                'nombre' => 'Manuel Antonio Mesones Muro',
                'provincia_id' => '140200',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => '140205',
                'nombre' => 'Pitipo',
                'provincia_id' => '140200',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => '140206',
                'nombre' => 'Pueblo Nuevo',
                'provincia_id' => '140200',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => '140301',
                'nombre' => 'Lambayeque',
                'provincia_id' => '140300',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => '140302',
                'nombre' => 'Chochope',
                'provincia_id' => '140300',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => '140303',
                'nombre' => 'Illimo',
                'provincia_id' => '140300',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => '140304',
                'nombre' => 'Jayanca',
                'provincia_id' => '140300',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => '140305',
                'nombre' => 'Mochumi',
                'provincia_id' => '140300',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => '140306',
                'nombre' => 'Morrope',
                'provincia_id' => '140300',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => '140307',
                'nombre' => 'Motupe',
                'provincia_id' => '140300',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => '140308',
                'nombre' => 'Olmos',
                'provincia_id' => '140300',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => '140309',
                'nombre' => 'Pacora',
                'provincia_id' => '140300',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => '140310',
                'nombre' => 'Salas',
                'provincia_id' => '140300',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => '140311',
                'nombre' => 'San José',
                'provincia_id' => '140300',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => '140312',
                'nombre' => 'Tucume',
                'provincia_id' => '140300',
                'departamento_id' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => '150101',
                'nombre' => 'Lima',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => '150102',
                'nombre' => 'Ancón',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => '150103',
                'nombre' => 'Ate',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => '150104',
                'nombre' => 'Barranco',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => '150105',
                'nombre' => 'Breña',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => '150106',
                'nombre' => 'Carabayllo',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => '150107',
                'nombre' => 'Chaclacayo',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => '150108',
                'nombre' => 'Chorrillos',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => '150109',
                'nombre' => 'Cieneguilla',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => '150110',
                'nombre' => 'Comas',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => '150111',
                'nombre' => 'El Agustino',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => '150112',
                'nombre' => 'Independencia',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => '150113',
                'nombre' => 'Jesús María',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => '150114',
                'nombre' => 'La Molina',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => '150115',
                'nombre' => 'La Victoria',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => '150116',
                'nombre' => 'Lince',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => '150117',
                'nombre' => 'Los Olivos',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => '150118',
                'nombre' => 'Lurigancho',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => '150119',
                'nombre' => 'Lurin',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => '150120',
                'nombre' => 'Magdalena del Mar',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => '150121',
                'nombre' => 'Pueblo Libre',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => '150122',
                'nombre' => 'Miraflores',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => '150123',
                'nombre' => 'Pachacamac',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => '150124',
                'nombre' => 'Pucusana',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => '150125',
                'nombre' => 'Puente Piedra',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => '150126',
                'nombre' => 'Punta Hermosa',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => '150127',
                'nombre' => 'Punta Negra',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => '150128',
                'nombre' => 'Rímac',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => '150129',
                'nombre' => 'San Bartolo',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => '150130',
                'nombre' => 'San Borja',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => '150131',
                'nombre' => 'San Isidro',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => '150132',
                'nombre' => 'San Juan de Lurigancho',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => '150133',
                'nombre' => 'San Juan de Miraflores',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => '150134',
                'nombre' => 'San Luis',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => '150135',
                'nombre' => 'San Martín de Porres',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => '150136',
                'nombre' => 'San Miguel',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => '150137',
                'nombre' => 'Santa Anita',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => '150138',
                'nombre' => 'Santa María del Mar',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => '150139',
                'nombre' => 'Santa Rosa',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => '150140',
                'nombre' => 'Santiago de Surco',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => '150141',
                'nombre' => 'Surquillo',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => '150142',
                'nombre' => 'Villa El Salvador',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => '150143',
                'nombre' => 'Villa María del Triunfo',
                'provincia_id' => '150100',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => '150201',
                'nombre' => 'Barranca',
                'provincia_id' => '150200',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => '150202',
                'nombre' => 'Paramonga',
                'provincia_id' => '150200',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => '150203',
                'nombre' => 'Pativilca',
                'provincia_id' => '150200',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => '150204',
                'nombre' => 'Supe',
                'provincia_id' => '150200',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => '150205',
                'nombre' => 'Supe Puerto',
                'provincia_id' => '150200',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => '150301',
                'nombre' => 'Cajatambo',
                'provincia_id' => '150300',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => '150302',
                'nombre' => 'Copa',
                'provincia_id' => '150300',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => '150303',
                'nombre' => 'Gorgor',
                'provincia_id' => '150300',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => '150304',
                'nombre' => 'Huancapon',
                'provincia_id' => '150300',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => '150305',
                'nombre' => 'Manas',
                'provincia_id' => '150300',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => '150401',
                'nombre' => 'Canta',
                'provincia_id' => '150400',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => '150402',
                'nombre' => 'Arahuay',
                'provincia_id' => '150400',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => '150403',
                'nombre' => 'Huamantanga',
                'provincia_id' => '150400',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => '150404',
                'nombre' => 'Huaros',
                'provincia_id' => '150400',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => '150405',
                'nombre' => 'Lachaqui',
                'provincia_id' => '150400',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => '150406',
                'nombre' => 'San Buenaventura',
                'provincia_id' => '150400',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => '150407',
                'nombre' => 'Santa Rosa de Quives',
                'provincia_id' => '150400',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => '150501',
                'nombre' => 'San Vicente de Cañete',
                'provincia_id' => '150500',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => '150502',
                'nombre' => 'Asia',
                'provincia_id' => '150500',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => '150503',
                'nombre' => 'Calango',
                'provincia_id' => '150500',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => '150504',
                'nombre' => 'Cerro Azul',
                'provincia_id' => '150500',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => '150505',
                'nombre' => 'Chilca',
                'provincia_id' => '150500',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => '150506',
                'nombre' => 'Coayllo',
                'provincia_id' => '150500',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => '150507',
                'nombre' => 'Imperial',
                'provincia_id' => '150500',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => '150508',
                'nombre' => 'Lunahuana',
                'provincia_id' => '150500',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => '150509',
                'nombre' => 'Mala',
                'provincia_id' => '150500',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => '150510',
                'nombre' => 'Nuevo Imperial',
                'provincia_id' => '150500',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => '150511',
                'nombre' => 'Pacaran',
                'provincia_id' => '150500',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => '150512',
                'nombre' => 'Quilmana',
                'provincia_id' => '150500',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => '150513',
                'nombre' => 'San Antonio',
                'provincia_id' => '150500',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => '150514',
                'nombre' => 'San Luis',
                'provincia_id' => '150500',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => '150515',
                'nombre' => 'Santa Cruz de Flores',
                'provincia_id' => '150500',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => '150516',
                'nombre' => 'Zúñiga',
                'provincia_id' => '150500',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => '150601',
                'nombre' => 'Huaral',
                'provincia_id' => '150600',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => '150602',
                'nombre' => 'Atavillos Alto',
                'provincia_id' => '150600',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => '150603',
                'nombre' => 'Atavillos Bajo',
                'provincia_id' => '150600',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => '150604',
                'nombre' => 'Aucallama',
                'provincia_id' => '150600',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => '150605',
                'nombre' => 'Chancay',
                'provincia_id' => '150600',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => '150606',
                'nombre' => 'Ihuari',
                'provincia_id' => '150600',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => '150607',
                'nombre' => 'Lampian',
                'provincia_id' => '150600',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => '150608',
                'nombre' => 'Pacaraos',
                'provincia_id' => '150600',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => '150609',
                'nombre' => 'San Miguel de Acos',
                'provincia_id' => '150600',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => '150610',
                'nombre' => 'Santa Cruz de Andamarca',
                'provincia_id' => '150600',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => '150611',
                'nombre' => 'Sumbilca',
                'provincia_id' => '150600',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => '150612',
                'nombre' => 'Veintisiete de Noviembre',
                'provincia_id' => '150600',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => '150701',
                'nombre' => 'Matucana',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => '150702',
                'nombre' => 'Antioquia',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => '150703',
                'nombre' => 'Callahuanca',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => '150704',
                'nombre' => 'Carampoma',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => '150705',
                'nombre' => 'Chicla',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => '150706',
                'nombre' => 'Cuenca',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => '150707',
                'nombre' => 'Huachupampa',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => '150708',
                'nombre' => 'Huanza',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => '150709',
                'nombre' => 'Huarochiri',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => '150710',
                'nombre' => 'Lahuaytambo',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => '150711',
                'nombre' => 'Langa',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => '150712',
                'nombre' => 'Laraos',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => '150713',
                'nombre' => 'Mariatana',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => '150714',
                'nombre' => 'Ricardo Palma',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => '150715',
                'nombre' => 'San Andrés de Tupicocha',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => '150716',
                'nombre' => 'San Antonio',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => '150717',
                'nombre' => 'San Bartolomé',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => '150718',
                'nombre' => 'San Damian',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => '150719',
                'nombre' => 'San Juan de Iris',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => '150720',
                'nombre' => 'San Juan de Tantaranche',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => '150721',
                'nombre' => 'San Lorenzo de Quinti',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => '150722',
                'nombre' => 'San Mateo',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => '150723',
                'nombre' => 'San Mateo de Otao',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => '150724',
                'nombre' => 'San Pedro de Casta',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => '150725',
                'nombre' => 'San Pedro de Huancayre',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => '150726',
                'nombre' => 'Sangallaya',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => '150727',
                'nombre' => 'Santa Cruz de Cocachacra',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => '150728',
                'nombre' => 'Santa Eulalia',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => '150729',
                'nombre' => 'Santiago de Anchucaya',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => '150730',
                'nombre' => 'Santiago de Tuna',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => '150731',
                'nombre' => 'Santo Domingo de Los Olleros',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => '150732',
                'nombre' => 'Surco',
                'provincia_id' => '150700',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => '150801',
                'nombre' => 'Huacho',
                'provincia_id' => '150800',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => '150802',
                'nombre' => 'Ambar',
                'provincia_id' => '150800',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => '150803',
                'nombre' => 'Caleta de Carquin',
                'provincia_id' => '150800',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => '150804',
                'nombre' => 'Checras',
                'provincia_id' => '150800',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => '150805',
                'nombre' => 'Hualmay',
                'provincia_id' => '150800',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => '150806',
                'nombre' => 'Huaura',
                'provincia_id' => '150800',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => '150807',
                'nombre' => 'Leoncio Prado',
                'provincia_id' => '150800',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => '150808',
                'nombre' => 'Paccho',
                'provincia_id' => '150800',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => '150809',
                'nombre' => 'Santa Leonor',
                'provincia_id' => '150800',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => '150810',
                'nombre' => 'Santa María',
                'provincia_id' => '150800',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => '150811',
                'nombre' => 'Sayan',
                'provincia_id' => '150800',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => '150812',
                'nombre' => 'Vegueta',
                'provincia_id' => '150800',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => '150901',
                'nombre' => 'Oyon',
                'provincia_id' => '150900',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => '150902',
                'nombre' => 'Andajes',
                'provincia_id' => '150900',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => '150903',
                'nombre' => 'Caujul',
                'provincia_id' => '150900',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => '150904',
                'nombre' => 'Cochamarca',
                'provincia_id' => '150900',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => '150905',
                'nombre' => 'Navan',
                'provincia_id' => '150900',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => '150906',
                'nombre' => 'Pachangara',
                'provincia_id' => '150900',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => '151001',
                'nombre' => 'Yauyos',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => '151002',
                'nombre' => 'Alis',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => '151003',
                'nombre' => 'Allauca',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => '151004',
                'nombre' => 'Ayaviri',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => '151005',
                'nombre' => 'Azángaro',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => '151006',
                'nombre' => 'Cacra',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => '151007',
                'nombre' => 'Carania',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => '151008',
                'nombre' => 'Catahuasi',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => '151009',
                'nombre' => 'Chocos',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => '151010',
                'nombre' => 'Cochas',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => '151011',
                'nombre' => 'Colonia',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => '151012',
                'nombre' => 'Hongos',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => '151013',
                'nombre' => 'Huampara',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => '151014',
                'nombre' => 'Huancaya',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => '151015',
                'nombre' => 'Huangascar',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => '151016',
                'nombre' => 'Huantan',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => '151017',
                'nombre' => 'Huañec',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => '151018',
                'nombre' => 'Laraos',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => '151019',
                'nombre' => 'Lincha',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => '151020',
                'nombre' => 'Madean',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => '151021',
                'nombre' => 'Miraflores',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => '151022',
                'nombre' => 'Omas',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => '151023',
                'nombre' => 'Putinza',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => '151024',
                'nombre' => 'Quinches',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => '151025',
                'nombre' => 'Quinocay',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => '151026',
                'nombre' => 'San Joaquín',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => '151027',
                'nombre' => 'San Pedro de Pilas',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => '151028',
                'nombre' => 'Tanta',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => '151029',
                'nombre' => 'Tauripampa',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => '151030',
                'nombre' => 'Tomas',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => '151031',
                'nombre' => 'Tupe',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => '151032',
                'nombre' => 'Viñac',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => '151033',
                'nombre' => 'Vitis',
                'provincia_id' => '151000',
                'departamento_id' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => '160101',
                'nombre' => 'Iquitos',
                'provincia_id' => '160100',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => '160102',
                'nombre' => 'Alto Nanay',
                'provincia_id' => '160100',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => '160103',
                'nombre' => 'Fernando Lores',
                'provincia_id' => '160100',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => '160104',
                'nombre' => 'Indiana',
                'provincia_id' => '160100',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => '160105',
                'nombre' => 'Las Amazonas',
                'provincia_id' => '160100',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => '160106',
                'nombre' => 'Mazan',
                'provincia_id' => '160100',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => '160107',
                'nombre' => 'Napo',
                'provincia_id' => '160100',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => '160108',
                'nombre' => 'Punchana',
                'provincia_id' => '160100',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => '160110',
                'nombre' => 'Torres Causana',
                'provincia_id' => '160100',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => '160112',
                'nombre' => 'Belén',
                'provincia_id' => '160100',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => '160113',
                'nombre' => 'San Juan Bautista',
                'provincia_id' => '160100',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => '160201',
                'nombre' => 'Yurimaguas',
                'provincia_id' => '160200',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => '160202',
                'nombre' => 'Balsapuerto',
                'provincia_id' => '160200',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => '160205',
                'nombre' => 'Jeberos',
                'provincia_id' => '160200',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => '160206',
                'nombre' => 'Lagunas',
                'provincia_id' => '160200',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => '160210',
                'nombre' => 'Santa Cruz',
                'provincia_id' => '160200',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => '160211',
                'nombre' => 'Teniente Cesar López Rojas',
                'provincia_id' => '160200',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => '160301',
                'nombre' => 'Nauta',
                'provincia_id' => '160300',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => '160302',
                'nombre' => 'Parinari',
                'provincia_id' => '160300',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => '160303',
                'nombre' => 'Tigre',
                'provincia_id' => '160300',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => '160304',
                'nombre' => 'Trompeteros',
                'provincia_id' => '160300',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => '160305',
                'nombre' => 'Urarinas',
                'provincia_id' => '160300',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => '160401',
                'nombre' => 'Ramón Castilla',
                'provincia_id' => '160400',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => '160402',
                'nombre' => 'Pebas',
                'provincia_id' => '160400',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => '160403',
                'nombre' => 'Yavari',
                'provincia_id' => '160400',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => '160404',
                'nombre' => 'San Pablo',
                'provincia_id' => '160400',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => '160501',
                'nombre' => 'Requena',
                'provincia_id' => '160500',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => '160502',
                'nombre' => 'Alto Tapiche',
                'provincia_id' => '160500',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => '160503',
                'nombre' => 'Capelo',
                'provincia_id' => '160500',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => '160504',
                'nombre' => 'Emilio San Martín',
                'provincia_id' => '160500',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => '160505',
                'nombre' => 'Maquia',
                'provincia_id' => '160500',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => '160506',
                'nombre' => 'Puinahua',
                'provincia_id' => '160500',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => '160507',
                'nombre' => 'Saquena',
                'provincia_id' => '160500',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => '160508',
                'nombre' => 'Soplin',
                'provincia_id' => '160500',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => '160509',
                'nombre' => 'Tapiche',
                'provincia_id' => '160500',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => '160510',
                'nombre' => 'Jenaro Herrera',
                'provincia_id' => '160500',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => '160511',
                'nombre' => 'Yaquerana',
                'provincia_id' => '160500',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => '160601',
                'nombre' => 'Contamana',
                'provincia_id' => '160600',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => '160602',
                'nombre' => 'Inahuaya',
                'provincia_id' => '160600',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => '160603',
                'nombre' => 'Padre Márquez',
                'provincia_id' => '160600',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => '160604',
                'nombre' => 'Pampa Hermosa',
                'provincia_id' => '160600',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => '160605',
                'nombre' => 'Sarayacu',
                'provincia_id' => '160600',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => '160606',
                'nombre' => 'Vargas Guerra',
                'provincia_id' => '160600',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => '160701',
                'nombre' => 'Barranca',
                'provincia_id' => '160700',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => '160702',
                'nombre' => 'Cahuapanas',
                'provincia_id' => '160700',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => '160703',
                'nombre' => 'Manseriche',
                'provincia_id' => '160700',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => '160704',
                'nombre' => 'Morona',
                'provincia_id' => '160700',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => '160705',
                'nombre' => 'Pastaza',
                'provincia_id' => '160700',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => '160706',
                'nombre' => 'Andoas',
                'provincia_id' => '160700',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('distritos')->insert(array (
            0 => 
            array (
                'id' => '160801',
                'nombre' => 'Putumayo',
                'provincia_id' => '160800',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => '160802',
                'nombre' => 'Rosa Panduro',
                'provincia_id' => '160800',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => '160803',
                'nombre' => 'Teniente Manuel Clavero',
                'provincia_id' => '160800',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => '160804',
                'nombre' => 'Yaguas',
                'provincia_id' => '160800',
                'departamento_id' => '160000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => '170101',
                'nombre' => 'Tambopata',
                'provincia_id' => '170100',
                'departamento_id' => '170000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => '170102',
                'nombre' => 'Inambari',
                'provincia_id' => '170100',
                'departamento_id' => '170000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => '170103',
                'nombre' => 'Las Piedras',
                'provincia_id' => '170100',
                'departamento_id' => '170000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => '170104',
                'nombre' => 'Laberinto',
                'provincia_id' => '170100',
                'departamento_id' => '170000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => '170201',
                'nombre' => 'Manu',
                'provincia_id' => '170200',
                'departamento_id' => '170000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => '170202',
                'nombre' => 'Fitzcarrald',
                'provincia_id' => '170200',
                'departamento_id' => '170000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => '170203',
                'nombre' => 'Madre de Dios',
                'provincia_id' => '170200',
                'departamento_id' => '170000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => '170204',
                'nombre' => 'Huepetuhe',
                'provincia_id' => '170200',
                'departamento_id' => '170000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => '170301',
                'nombre' => 'Iñapari',
                'provincia_id' => '170300',
                'departamento_id' => '170000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => '170302',
                'nombre' => 'Iberia',
                'provincia_id' => '170300',
                'departamento_id' => '170000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => '170303',
                'nombre' => 'Tahuamanu',
                'provincia_id' => '170300',
                'departamento_id' => '170000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => '180101',
                'nombre' => 'Moquegua',
                'provincia_id' => '180100',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => '180102',
                'nombre' => 'Carumas',
                'provincia_id' => '180100',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => '180103',
                'nombre' => 'Cuchumbaya',
                'provincia_id' => '180100',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => '180104',
                'nombre' => 'Samegua',
                'provincia_id' => '180100',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => '180105',
                'nombre' => 'San Cristóbal',
                'provincia_id' => '180100',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => '180106',
                'nombre' => 'Torata',
                'provincia_id' => '180100',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => '180201',
                'nombre' => 'Omate',
                'provincia_id' => '180200',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => '180202',
                'nombre' => 'Chojata',
                'provincia_id' => '180200',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => '180203',
                'nombre' => 'Coalaque',
                'provincia_id' => '180200',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => '180204',
                'nombre' => 'Ichuña',
                'provincia_id' => '180200',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => '180205',
                'nombre' => 'La Capilla',
                'provincia_id' => '180200',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => '180206',
                'nombre' => 'Lloque',
                'provincia_id' => '180200',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => '180207',
                'nombre' => 'Matalaque',
                'provincia_id' => '180200',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => '180208',
                'nombre' => 'Puquina',
                'provincia_id' => '180200',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => '180209',
                'nombre' => 'Quinistaquillas',
                'provincia_id' => '180200',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => '180210',
                'nombre' => 'Ubinas',
                'provincia_id' => '180200',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => '180211',
                'nombre' => 'Yunga',
                'provincia_id' => '180200',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => '180301',
                'nombre' => 'Ilo',
                'provincia_id' => '180300',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => '180302',
                'nombre' => 'El Algarrobal',
                'provincia_id' => '180300',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => '180303',
                'nombre' => 'Pacocha',
                'provincia_id' => '180300',
                'departamento_id' => '180000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => '190101',
                'nombre' => 'Chaupimarca',
                'provincia_id' => '190100',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => '190102',
                'nombre' => 'Huachon',
                'provincia_id' => '190100',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => '190103',
                'nombre' => 'Huariaca',
                'provincia_id' => '190100',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => '190104',
                'nombre' => 'Huayllay',
                'provincia_id' => '190100',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => '190105',
                'nombre' => 'Ninacaca',
                'provincia_id' => '190100',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => '190106',
                'nombre' => 'Pallanchacra',
                'provincia_id' => '190100',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => '190107',
                'nombre' => 'Paucartambo',
                'provincia_id' => '190100',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => '190108',
                'nombre' => 'San Francisco de Asís de Yarusyacan',
                'provincia_id' => '190100',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => '190109',
                'nombre' => 'Simon Bolívar',
                'provincia_id' => '190100',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => '190110',
                'nombre' => 'Ticlacayan',
                'provincia_id' => '190100',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => '190111',
                'nombre' => 'Tinyahuarco',
                'provincia_id' => '190100',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => '190112',
                'nombre' => 'Vicco',
                'provincia_id' => '190100',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => '190113',
                'nombre' => 'Yanacancha',
                'provincia_id' => '190100',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => '190201',
                'nombre' => 'Yanahuanca',
                'provincia_id' => '190200',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => '190202',
                'nombre' => 'Chacayan',
                'provincia_id' => '190200',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => '190203',
                'nombre' => 'Goyllarisquizga',
                'provincia_id' => '190200',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => '190204',
                'nombre' => 'Paucar',
                'provincia_id' => '190200',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => '190205',
                'nombre' => 'San Pedro de Pillao',
                'provincia_id' => '190200',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => '190206',
                'nombre' => 'Santa Ana de Tusi',
                'provincia_id' => '190200',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => '190207',
                'nombre' => 'Tapuc',
                'provincia_id' => '190200',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => '190208',
                'nombre' => 'Vilcabamba',
                'provincia_id' => '190200',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => '190301',
                'nombre' => 'Oxapampa',
                'provincia_id' => '190300',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => '190302',
                'nombre' => 'Chontabamba',
                'provincia_id' => '190300',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => '190303',
                'nombre' => 'Huancabamba',
                'provincia_id' => '190300',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => '190304',
                'nombre' => 'Palcazu',
                'provincia_id' => '190300',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => '190305',
                'nombre' => 'Pozuzo',
                'provincia_id' => '190300',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => '190306',
                'nombre' => 'Puerto Bermúdez',
                'provincia_id' => '190300',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => '190307',
                'nombre' => 'Villa Rica',
                'provincia_id' => '190300',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => '190308',
                'nombre' => 'Constitución',
                'provincia_id' => '190300',
                'departamento_id' => '190000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => '200101',
                'nombre' => 'Piura',
                'provincia_id' => '200100',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => '200104',
                'nombre' => 'Castilla',
                'provincia_id' => '200100',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => '200105',
                'nombre' => 'Catacaos',
                'provincia_id' => '200100',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => '200107',
                'nombre' => 'Cura Mori',
                'provincia_id' => '200100',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => '200108',
                'nombre' => 'El Tallan',
                'provincia_id' => '200100',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => '200109',
                'nombre' => 'La Arena',
                'provincia_id' => '200100',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => '200110',
                'nombre' => 'La Unión',
                'provincia_id' => '200100',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => '200111',
                'nombre' => 'Las Lomas',
                'provincia_id' => '200100',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => '200114',
                'nombre' => 'Tambo Grande',
                'provincia_id' => '200100',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => '200115',
                'nombre' => 'Veintiseis de Octubre',
                'provincia_id' => '200100',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => '200201',
                'nombre' => 'Ayabaca',
                'provincia_id' => '200200',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => '200202',
                'nombre' => 'Frias',
                'provincia_id' => '200200',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => '200203',
                'nombre' => 'Jilili',
                'provincia_id' => '200200',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => '200204',
                'nombre' => 'Lagunas',
                'provincia_id' => '200200',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => '200205',
                'nombre' => 'Montero',
                'provincia_id' => '200200',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => '200206',
                'nombre' => 'Pacaipampa',
                'provincia_id' => '200200',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => '200207',
                'nombre' => 'Paimas',
                'provincia_id' => '200200',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => '200208',
                'nombre' => 'Sapillica',
                'provincia_id' => '200200',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => '200209',
                'nombre' => 'Sicchez',
                'provincia_id' => '200200',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => '200210',
                'nombre' => 'Suyo',
                'provincia_id' => '200200',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => '200301',
                'nombre' => 'Huancabamba',
                'provincia_id' => '200300',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => '200302',
                'nombre' => 'Canchaque',
                'provincia_id' => '200300',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => '200303',
                'nombre' => 'El Carmen de la Frontera',
                'provincia_id' => '200300',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => '200304',
                'nombre' => 'Huarmaca',
                'provincia_id' => '200300',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => '200305',
                'nombre' => 'Lalaquiz',
                'provincia_id' => '200300',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => '200306',
                'nombre' => 'San Miguel de El Faique',
                'provincia_id' => '200300',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => '200307',
                'nombre' => 'Sondor',
                'provincia_id' => '200300',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => '200308',
                'nombre' => 'Sondorillo',
                'provincia_id' => '200300',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => '200401',
                'nombre' => 'Chulucanas',
                'provincia_id' => '200400',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => '200402',
                'nombre' => 'Buenos Aires',
                'provincia_id' => '200400',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => '200403',
                'nombre' => 'Chalaco',
                'provincia_id' => '200400',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => '200404',
                'nombre' => 'La Matanza',
                'provincia_id' => '200400',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => '200405',
                'nombre' => 'Morropon',
                'provincia_id' => '200400',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => '200406',
                'nombre' => 'Salitral',
                'provincia_id' => '200400',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => '200407',
                'nombre' => 'San Juan de Bigote',
                'provincia_id' => '200400',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => '200408',
                'nombre' => 'Santa Catalina de Mossa',
                'provincia_id' => '200400',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => '200409',
                'nombre' => 'Santo Domingo',
                'provincia_id' => '200400',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => '200410',
                'nombre' => 'Yamango',
                'provincia_id' => '200400',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => '200501',
                'nombre' => 'Paita',
                'provincia_id' => '200500',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => '200502',
                'nombre' => 'Amotape',
                'provincia_id' => '200500',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => '200503',
                'nombre' => 'Arenal',
                'provincia_id' => '200500',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => '200504',
                'nombre' => 'Colan',
                'provincia_id' => '200500',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => '200505',
                'nombre' => 'La Huaca',
                'provincia_id' => '200500',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => '200506',
                'nombre' => 'Tamarindo',
                'provincia_id' => '200500',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => '200507',
                'nombre' => 'Vichayal',
                'provincia_id' => '200500',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => '200601',
                'nombre' => 'Sullana',
                'provincia_id' => '200600',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => '200602',
                'nombre' => 'Bellavista',
                'provincia_id' => '200600',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => '200603',
                'nombre' => 'Ignacio Escudero',
                'provincia_id' => '200600',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => '200604',
                'nombre' => 'Lancones',
                'provincia_id' => '200600',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => '200605',
                'nombre' => 'Marcavelica',
                'provincia_id' => '200600',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => '200606',
                'nombre' => 'Miguel Checa',
                'provincia_id' => '200600',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => '200607',
                'nombre' => 'Querecotillo',
                'provincia_id' => '200600',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => '200608',
                'nombre' => 'Salitral',
                'provincia_id' => '200600',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => '200701',
                'nombre' => 'Pariñas',
                'provincia_id' => '200700',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => '200702',
                'nombre' => 'El Alto',
                'provincia_id' => '200700',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => '200703',
                'nombre' => 'La Brea',
                'provincia_id' => '200700',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => '200704',
                'nombre' => 'Lobitos',
                'provincia_id' => '200700',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => '200705',
                'nombre' => 'Los Organos',
                'provincia_id' => '200700',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => '200706',
                'nombre' => 'Mancora',
                'provincia_id' => '200700',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => '200801',
                'nombre' => 'Sechura',
                'provincia_id' => '200800',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => '200802',
                'nombre' => 'Bellavista de la Unión',
                'provincia_id' => '200800',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => '200803',
                'nombre' => 'Bernal',
                'provincia_id' => '200800',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => '200804',
                'nombre' => 'Cristo Nos Valga',
                'provincia_id' => '200800',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => '200805',
                'nombre' => 'Vice',
                'provincia_id' => '200800',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => '200806',
                'nombre' => 'Rinconada Llicuar',
                'provincia_id' => '200800',
                'departamento_id' => '200000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => '210101',
                'nombre' => 'Puno',
                'provincia_id' => '210100',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => '210102',
                'nombre' => 'Acora',
                'provincia_id' => '210100',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => '210103',
                'nombre' => 'Amantani',
                'provincia_id' => '210100',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => '210104',
                'nombre' => 'Atuncolla',
                'provincia_id' => '210100',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => '210105',
                'nombre' => 'Capachica',
                'provincia_id' => '210100',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => '210106',
                'nombre' => 'Chucuito',
                'provincia_id' => '210100',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => '210107',
                'nombre' => 'Coata',
                'provincia_id' => '210100',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => '210108',
                'nombre' => 'Huata',
                'provincia_id' => '210100',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => '210109',
                'nombre' => 'Mañazo',
                'provincia_id' => '210100',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => '210110',
                'nombre' => 'Paucarcolla',
                'provincia_id' => '210100',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => '210111',
                'nombre' => 'Pichacani',
                'provincia_id' => '210100',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => '210112',
                'nombre' => 'Plateria',
                'provincia_id' => '210100',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => '210113',
                'nombre' => 'San Antonio',
                'provincia_id' => '210100',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => '210114',
                'nombre' => 'Tiquillaca',
                'provincia_id' => '210100',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => '210115',
                'nombre' => 'Vilque',
                'provincia_id' => '210100',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => '210201',
                'nombre' => 'Azángaro',
                'provincia_id' => '210200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => '210202',
                'nombre' => 'Achaya',
                'provincia_id' => '210200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => '210203',
                'nombre' => 'Arapa',
                'provincia_id' => '210200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => '210204',
                'nombre' => 'Asillo',
                'provincia_id' => '210200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => '210205',
                'nombre' => 'Caminaca',
                'provincia_id' => '210200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => '210206',
                'nombre' => 'Chupa',
                'provincia_id' => '210200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => '210207',
                'nombre' => 'José Domingo Choquehuanca',
                'provincia_id' => '210200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => '210208',
                'nombre' => 'Muñani',
                'provincia_id' => '210200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => '210209',
                'nombre' => 'Potoni',
                'provincia_id' => '210200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => '210210',
                'nombre' => 'Saman',
                'provincia_id' => '210200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => '210211',
                'nombre' => 'San Anton',
                'provincia_id' => '210200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => '210212',
                'nombre' => 'San José',
                'provincia_id' => '210200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => '210213',
                'nombre' => 'San Juan de Salinas',
                'provincia_id' => '210200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => '210214',
                'nombre' => 'Santiago de Pupuja',
                'provincia_id' => '210200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => '210215',
                'nombre' => 'Tirapata',
                'provincia_id' => '210200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => '210301',
                'nombre' => 'Macusani',
                'provincia_id' => '210300',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => '210302',
                'nombre' => 'Ajoyani',
                'provincia_id' => '210300',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => '210303',
                'nombre' => 'Ayapata',
                'provincia_id' => '210300',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => '210304',
                'nombre' => 'Coasa',
                'provincia_id' => '210300',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => '210305',
                'nombre' => 'Corani',
                'provincia_id' => '210300',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => '210306',
                'nombre' => 'Crucero',
                'provincia_id' => '210300',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => '210307',
                'nombre' => 'Ituata',
                'provincia_id' => '210300',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => '210308',
                'nombre' => 'Ollachea',
                'provincia_id' => '210300',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => '210309',
                'nombre' => 'San Gaban',
                'provincia_id' => '210300',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => '210310',
                'nombre' => 'Usicayos',
                'provincia_id' => '210300',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => '210401',
                'nombre' => 'Juli',
                'provincia_id' => '210400',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => '210402',
                'nombre' => 'Desaguadero',
                'provincia_id' => '210400',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => '210403',
                'nombre' => 'Huacullani',
                'provincia_id' => '210400',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => '210404',
                'nombre' => 'Kelluyo',
                'provincia_id' => '210400',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => '210405',
                'nombre' => 'Pisacoma',
                'provincia_id' => '210400',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => '210406',
                'nombre' => 'Pomata',
                'provincia_id' => '210400',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => '210407',
                'nombre' => 'Zepita',
                'provincia_id' => '210400',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => '210501',
                'nombre' => 'Ilave',
                'provincia_id' => '210500',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => '210502',
                'nombre' => 'Capazo',
                'provincia_id' => '210500',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => '210503',
                'nombre' => 'Pilcuyo',
                'provincia_id' => '210500',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => '210504',
                'nombre' => 'Santa Rosa',
                'provincia_id' => '210500',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => '210505',
                'nombre' => 'Conduriri',
                'provincia_id' => '210500',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => '210601',
                'nombre' => 'Huancane',
                'provincia_id' => '210600',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => '210602',
                'nombre' => 'Cojata',
                'provincia_id' => '210600',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => '210603',
                'nombre' => 'Huatasani',
                'provincia_id' => '210600',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => '210604',
                'nombre' => 'Inchupalla',
                'provincia_id' => '210600',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => '210605',
                'nombre' => 'Pusi',
                'provincia_id' => '210600',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => '210606',
                'nombre' => 'Rosaspata',
                'provincia_id' => '210600',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => '210607',
                'nombre' => 'Taraco',
                'provincia_id' => '210600',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => '210608',
                'nombre' => 'Vilque Chico',
                'provincia_id' => '210600',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => '210701',
                'nombre' => 'Lampa',
                'provincia_id' => '210700',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => '210702',
                'nombre' => 'Cabanilla',
                'provincia_id' => '210700',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => '210703',
                'nombre' => 'Calapuja',
                'provincia_id' => '210700',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => '210704',
                'nombre' => 'Nicasio',
                'provincia_id' => '210700',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => '210705',
                'nombre' => 'Ocuviri',
                'provincia_id' => '210700',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => '210706',
                'nombre' => 'Palca',
                'provincia_id' => '210700',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => '210707',
                'nombre' => 'Paratia',
                'provincia_id' => '210700',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => '210708',
                'nombre' => 'Pucara',
                'provincia_id' => '210700',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => '210709',
                'nombre' => 'Santa Lucia',
                'provincia_id' => '210700',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => '210710',
                'nombre' => 'Vilavila',
                'provincia_id' => '210700',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => '210801',
                'nombre' => 'Ayaviri',
                'provincia_id' => '210800',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => '210802',
                'nombre' => 'Antauta',
                'provincia_id' => '210800',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => '210803',
                'nombre' => 'Cupi',
                'provincia_id' => '210800',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => '210804',
                'nombre' => 'Llalli',
                'provincia_id' => '210800',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => '210805',
                'nombre' => 'Macari',
                'provincia_id' => '210800',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => '210806',
                'nombre' => 'Nuñoa',
                'provincia_id' => '210800',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => '210807',
                'nombre' => 'Orurillo',
                'provincia_id' => '210800',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => '210808',
                'nombre' => 'Santa Rosa',
                'provincia_id' => '210800',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => '210809',
                'nombre' => 'Umachiri',
                'provincia_id' => '210800',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => '210901',
                'nombre' => 'Moho',
                'provincia_id' => '210900',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => '210902',
                'nombre' => 'Conima',
                'provincia_id' => '210900',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => '210903',
                'nombre' => 'Huayrapata',
                'provincia_id' => '210900',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => '210904',
                'nombre' => 'Tilali',
                'provincia_id' => '210900',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => '211001',
                'nombre' => 'Putina',
                'provincia_id' => '211000',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => '211002',
                'nombre' => 'Ananea',
                'provincia_id' => '211000',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => '211003',
                'nombre' => 'Pedro Vilca Apaza',
                'provincia_id' => '211000',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => '211004',
                'nombre' => 'Quilcapuncu',
                'provincia_id' => '211000',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => '211005',
                'nombre' => 'Sina',
                'provincia_id' => '211000',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => '211101',
                'nombre' => 'Juliaca',
                'provincia_id' => '211100',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => '211102',
                'nombre' => 'Cabana',
                'provincia_id' => '211100',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => '211103',
                'nombre' => 'Cabanillas',
                'provincia_id' => '211100',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => '211104',
                'nombre' => 'Caracoto',
                'provincia_id' => '211100',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => '211105',
                'nombre' => 'San Miguel',
                'provincia_id' => '211100',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => '211201',
                'nombre' => 'Sandia',
                'provincia_id' => '211200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => '211202',
                'nombre' => 'Cuyocuyo',
                'provincia_id' => '211200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => '211203',
                'nombre' => 'Limbani',
                'provincia_id' => '211200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => '211204',
                'nombre' => 'Patambuco',
                'provincia_id' => '211200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => '211205',
                'nombre' => 'Phara',
                'provincia_id' => '211200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => '211206',
                'nombre' => 'Quiaca',
                'provincia_id' => '211200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => '211207',
                'nombre' => 'San Juan del Oro',
                'provincia_id' => '211200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => '211208',
                'nombre' => 'Yanahuaya',
                'provincia_id' => '211200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => '211209',
                'nombre' => 'Alto Inambari',
                'provincia_id' => '211200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => '211210',
                'nombre' => 'San Pedro de Putina Punco',
                'provincia_id' => '211200',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => '211301',
                'nombre' => 'Yunguyo',
                'provincia_id' => '211300',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => '211302',
                'nombre' => 'Anapia',
                'provincia_id' => '211300',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => '211303',
                'nombre' => 'Copani',
                'provincia_id' => '211300',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => '211304',
                'nombre' => 'Cuturapi',
                'provincia_id' => '211300',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => '211305',
                'nombre' => 'Ollaraya',
                'provincia_id' => '211300',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => '211306',
                'nombre' => 'Tinicachi',
                'provincia_id' => '211300',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => '211307',
                'nombre' => 'Unicachi',
                'provincia_id' => '211300',
                'departamento_id' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => '220101',
                'nombre' => 'Moyobamba',
                'provincia_id' => '220100',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => '220102',
                'nombre' => 'Calzada',
                'provincia_id' => '220100',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => '220103',
                'nombre' => 'Habana',
                'provincia_id' => '220100',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => '220104',
                'nombre' => 'Jepelacio',
                'provincia_id' => '220100',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => '220105',
                'nombre' => 'Soritor',
                'provincia_id' => '220100',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => '220106',
                'nombre' => 'Yantalo',
                'provincia_id' => '220100',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => '220201',
                'nombre' => 'Bellavista',
                'provincia_id' => '220200',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => '220202',
                'nombre' => 'Alto Biavo',
                'provincia_id' => '220200',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => '220203',
                'nombre' => 'Bajo Biavo',
                'provincia_id' => '220200',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => '220204',
                'nombre' => 'Huallaga',
                'provincia_id' => '220200',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => '220205',
                'nombre' => 'San Pablo',
                'provincia_id' => '220200',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => '220206',
                'nombre' => 'San Rafael',
                'provincia_id' => '220200',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => '220301',
                'nombre' => 'San José de Sisa',
                'provincia_id' => '220300',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => '220302',
                'nombre' => 'Agua Blanca',
                'provincia_id' => '220300',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => '220303',
                'nombre' => 'San Martín',
                'provincia_id' => '220300',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => '220304',
                'nombre' => 'Santa Rosa',
                'provincia_id' => '220300',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => '220305',
                'nombre' => 'Shatoja',
                'provincia_id' => '220300',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => '220401',
                'nombre' => 'Saposoa',
                'provincia_id' => '220400',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => '220402',
                'nombre' => 'Alto Saposoa',
                'provincia_id' => '220400',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => '220403',
                'nombre' => 'El Eslabón',
                'provincia_id' => '220400',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => '220404',
                'nombre' => 'Piscoyacu',
                'provincia_id' => '220400',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => '220405',
                'nombre' => 'Sacanche',
                'provincia_id' => '220400',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => '220406',
                'nombre' => 'Tingo de Saposoa',
                'provincia_id' => '220400',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => '220501',
                'nombre' => 'Lamas',
                'provincia_id' => '220500',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => '220502',
                'nombre' => 'Alonso de Alvarado',
                'provincia_id' => '220500',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => '220503',
                'nombre' => 'Barranquita',
                'provincia_id' => '220500',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => '220504',
                'nombre' => 'Caynarachi',
                'provincia_id' => '220500',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => '220505',
                'nombre' => 'Cuñumbuqui',
                'provincia_id' => '220500',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => '220506',
                'nombre' => 'Pinto Recodo',
                'provincia_id' => '220500',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => '220507',
                'nombre' => 'Rumisapa',
                'provincia_id' => '220500',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => '220508',
                'nombre' => 'San Roque de Cumbaza',
                'provincia_id' => '220500',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => '220509',
                'nombre' => 'Shanao',
                'provincia_id' => '220500',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => '220510',
                'nombre' => 'Tabalosos',
                'provincia_id' => '220500',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => '220511',
                'nombre' => 'Zapatero',
                'provincia_id' => '220500',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => '220601',
                'nombre' => 'Juanjuí',
                'provincia_id' => '220600',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => '220602',
                'nombre' => 'Campanilla',
                'provincia_id' => '220600',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => '220603',
                'nombre' => 'Huicungo',
                'provincia_id' => '220600',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => '220604',
                'nombre' => 'Pachiza',
                'provincia_id' => '220600',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => '220605',
                'nombre' => 'Pajarillo',
                'provincia_id' => '220600',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => '220701',
                'nombre' => 'Picota',
                'provincia_id' => '220700',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => '220702',
                'nombre' => 'Buenos Aires',
                'provincia_id' => '220700',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => '220703',
                'nombre' => 'Caspisapa',
                'provincia_id' => '220700',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => '220704',
                'nombre' => 'Pilluana',
                'provincia_id' => '220700',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => '220705',
                'nombre' => 'Pucacaca',
                'provincia_id' => '220700',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => '220706',
                'nombre' => 'San Cristóbal',
                'provincia_id' => '220700',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => '220707',
                'nombre' => 'San Hilarión',
                'provincia_id' => '220700',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => '220708',
                'nombre' => 'Shamboyacu',
                'provincia_id' => '220700',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => '220709',
                'nombre' => 'Tingo de Ponasa',
                'provincia_id' => '220700',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => '220710',
                'nombre' => 'Tres Unidos',
                'provincia_id' => '220700',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => '220801',
                'nombre' => 'Rioja',
                'provincia_id' => '220800',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => '220802',
                'nombre' => 'Awajun',
                'provincia_id' => '220800',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => '220803',
                'nombre' => 'Elías Soplin Vargas',
                'provincia_id' => '220800',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => '220804',
                'nombre' => 'Nueva Cajamarca',
                'provincia_id' => '220800',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => '220805',
                'nombre' => 'Pardo Miguel',
                'provincia_id' => '220800',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => '220806',
                'nombre' => 'Posic',
                'provincia_id' => '220800',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => '220807',
                'nombre' => 'San Fernando',
                'provincia_id' => '220800',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => '220808',
                'nombre' => 'Yorongos',
                'provincia_id' => '220800',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => '220809',
                'nombre' => 'Yuracyacu',
                'provincia_id' => '220800',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => '220901',
                'nombre' => 'Tarapoto',
                'provincia_id' => '220900',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => '220902',
                'nombre' => 'Alberto Leveau',
                'provincia_id' => '220900',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => '220903',
                'nombre' => 'Cacatachi',
                'provincia_id' => '220900',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => '220904',
                'nombre' => 'Chazuta',
                'provincia_id' => '220900',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => '220905',
                'nombre' => 'Chipurana',
                'provincia_id' => '220900',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => '220906',
                'nombre' => 'El Porvenir',
                'provincia_id' => '220900',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => '220907',
                'nombre' => 'Huimbayoc',
                'provincia_id' => '220900',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => '220908',
                'nombre' => 'Juan Guerra',
                'provincia_id' => '220900',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => '220909',
                'nombre' => 'La Banda de Shilcayo',
                'provincia_id' => '220900',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => '220910',
                'nombre' => 'Morales',
                'provincia_id' => '220900',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => '220911',
                'nombre' => 'Papaplaya',
                'provincia_id' => '220900',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => '220912',
                'nombre' => 'San Antonio',
                'provincia_id' => '220900',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => '220913',
                'nombre' => 'Sauce',
                'provincia_id' => '220900',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => '220914',
                'nombre' => 'Shapaja',
                'provincia_id' => '220900',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => '221001',
                'nombre' => 'Tocache',
                'provincia_id' => '221000',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => '221002',
                'nombre' => 'Nuevo Progreso',
                'provincia_id' => '221000',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => '221003',
                'nombre' => 'Polvora',
                'provincia_id' => '221000',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => '221004',
                'nombre' => 'Shunte',
                'provincia_id' => '221000',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => '221005',
                'nombre' => 'Uchiza',
                'provincia_id' => '221000',
                'departamento_id' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => '230101',
                'nombre' => 'Tacna',
                'provincia_id' => '230100',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => '230102',
                'nombre' => 'Alto de la Alianza',
                'provincia_id' => '230100',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => '230103',
                'nombre' => 'Calana',
                'provincia_id' => '230100',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => '230104',
                'nombre' => 'Ciudad Nueva',
                'provincia_id' => '230100',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => '230105',
                'nombre' => 'Inclan',
                'provincia_id' => '230100',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => '230106',
                'nombre' => 'Pachia',
                'provincia_id' => '230100',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => '230107',
                'nombre' => 'Palca',
                'provincia_id' => '230100',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => '230108',
                'nombre' => 'Pocollay',
                'provincia_id' => '230100',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => '230109',
                'nombre' => 'Sama',
                'provincia_id' => '230100',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => '230110',
                'nombre' => 'Coronel Gregorio Albarracín Lanchipa',
                'provincia_id' => '230100',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => '230111',
                'nombre' => 'La Yarada los Palos',
                'provincia_id' => '230100',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => '230201',
                'nombre' => 'Candarave',
                'provincia_id' => '230200',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => '230202',
                'nombre' => 'Cairani',
                'provincia_id' => '230200',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => '230203',
                'nombre' => 'Camilaca',
                'provincia_id' => '230200',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => '230204',
                'nombre' => 'Curibaya',
                'provincia_id' => '230200',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => '230205',
                'nombre' => 'Huanuara',
                'provincia_id' => '230200',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => '230206',
                'nombre' => 'Quilahuani',
                'provincia_id' => '230200',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => '230301',
                'nombre' => 'Locumba',
                'provincia_id' => '230300',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => '230302',
                'nombre' => 'Ilabaya',
                'provincia_id' => '230300',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => '230303',
                'nombre' => 'Ite',
                'provincia_id' => '230300',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => '230401',
                'nombre' => 'Tarata',
                'provincia_id' => '230400',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => '230402',
                'nombre' => 'Héroes Albarracín',
                'provincia_id' => '230400',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => '230403',
                'nombre' => 'Estique',
                'provincia_id' => '230400',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => '230404',
                'nombre' => 'Estique-Pampa',
                'provincia_id' => '230400',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => '230405',
                'nombre' => 'Sitajara',
                'provincia_id' => '230400',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => '230406',
                'nombre' => 'Susapaya',
                'provincia_id' => '230400',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => '230407',
                'nombre' => 'Tarucachi',
                'provincia_id' => '230400',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => '230408',
                'nombre' => 'Ticaco',
                'provincia_id' => '230400',
                'departamento_id' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => '240101',
                'nombre' => 'Tumbes',
                'provincia_id' => '240100',
                'departamento_id' => '240000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => '240102',
                'nombre' => 'Corrales',
                'provincia_id' => '240100',
                'departamento_id' => '240000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => '240103',
                'nombre' => 'La Cruz',
                'provincia_id' => '240100',
                'departamento_id' => '240000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => '240104',
                'nombre' => 'Pampas de Hospital',
                'provincia_id' => '240100',
                'departamento_id' => '240000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => '240105',
                'nombre' => 'San Jacinto',
                'provincia_id' => '240100',
                'departamento_id' => '240000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => '240106',
                'nombre' => 'San Juan de la Virgen',
                'provincia_id' => '240100',
                'departamento_id' => '240000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => '240201',
                'nombre' => 'Zorritos',
                'provincia_id' => '240200',
                'departamento_id' => '240000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => '240202',
                'nombre' => 'Casitas',
                'provincia_id' => '240200',
                'departamento_id' => '240000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => '240203',
                'nombre' => 'Canoas de Punta Sal',
                'provincia_id' => '240200',
                'departamento_id' => '240000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => '240301',
                'nombre' => 'Zarumilla',
                'provincia_id' => '240300',
                'departamento_id' => '240000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => '240302',
                'nombre' => 'Aguas Verdes',
                'provincia_id' => '240300',
                'departamento_id' => '240000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => '240303',
                'nombre' => 'Matapalo',
                'provincia_id' => '240300',
                'departamento_id' => '240000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => '240304',
                'nombre' => 'Papayal',
                'provincia_id' => '240300',
                'departamento_id' => '240000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => '250101',
                'nombre' => 'Calleria',
                'provincia_id' => '250100',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => '250102',
                'nombre' => 'Campoverde',
                'provincia_id' => '250100',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => '250103',
                'nombre' => 'Iparia',
                'provincia_id' => '250100',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => '250104',
                'nombre' => 'Masisea',
                'provincia_id' => '250100',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => '250105',
                'nombre' => 'Yarinacocha',
                'provincia_id' => '250100',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => '250106',
                'nombre' => 'Nueva Requena',
                'provincia_id' => '250100',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => '250107',
                'nombre' => 'Manantay',
                'provincia_id' => '250100',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => '250201',
                'nombre' => 'Raymondi',
                'provincia_id' => '250200',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => '250202',
                'nombre' => 'Sepahua',
                'provincia_id' => '250200',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => '250203',
                'nombre' => 'Tahuania',
                'provincia_id' => '250200',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => '250204',
                'nombre' => 'Yurua',
                'provincia_id' => '250200',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => '250301',
                'nombre' => 'Padre Abad',
                'provincia_id' => '250300',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => '250302',
                'nombre' => 'Irazola',
                'provincia_id' => '250300',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => '250303',
                'nombre' => 'Curimana',
                'provincia_id' => '250300',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => '250304',
                'nombre' => 'Neshuya',
                'provincia_id' => '250300',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => '250305',
                'nombre' => 'Alexander Von Humboldt',
                'provincia_id' => '250300',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => '250401',
                'nombre' => 'Purús',
                'provincia_id' => '250400',
                'departamento_id' => '250000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}