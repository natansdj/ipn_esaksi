<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provinces')->delete();
        
        \DB::table('provinces')->insert(array (
            0 => 
            array (
                'id' => '11',
                'name' => 'ACEH',
            ),
            1 => 
            array (
                'id' => '12',
                'name' => 'SUMATERA UTARA',
            ),
            2 => 
            array (
                'id' => '13',
                'name' => 'SUMATERA BARAT',
            ),
            3 => 
            array (
                'id' => '14',
                'name' => 'RIAU',
            ),
            4 => 
            array (
                'id' => '15',
                'name' => 'JAMBI',
            ),
            5 => 
            array (
                'id' => '16',
                'name' => 'SUMATERA SELATAN',
            ),
            6 => 
            array (
                'id' => '17',
                'name' => 'BENGKULU',
            ),
            7 => 
            array (
                'id' => '18',
                'name' => 'LAMPUNG',
            ),
            8 => 
            array (
                'id' => '19',
                'name' => 'KEPULAUAN BANGKA BELITUNG',
            ),
            9 => 
            array (
                'id' => '21',
                'name' => 'KEPULAUAN RIAU',
            ),
            10 => 
            array (
                'id' => '31',
                'name' => 'DKI JAKARTA',
            ),
            11 => 
            array (
                'id' => '32',
                'name' => 'JAWA BARAT',
            ),
            12 => 
            array (
                'id' => '33',
                'name' => 'JAWA TENGAH',
            ),
            13 => 
            array (
                'id' => '34',
                'name' => 'DI YOGYAKARTA',
            ),
            14 => 
            array (
                'id' => '35',
                'name' => 'JAWA TIMUR',
            ),
            15 => 
            array (
                'id' => '36',
                'name' => 'BANTEN',
            ),
            16 => 
            array (
                'id' => '51',
                'name' => 'BALI',
            ),
            17 => 
            array (
                'id' => '52',
                'name' => 'NUSA TENGGARA BARAT',
            ),
            18 => 
            array (
                'id' => '53',
                'name' => 'NUSA TENGGARA TIMUR',
            ),
            19 => 
            array (
                'id' => '61',
                'name' => 'KALIMANTAN BARAT',
            ),
            20 => 
            array (
                'id' => '62',
                'name' => 'KALIMANTAN TENGAH',
            ),
            21 => 
            array (
                'id' => '63',
                'name' => 'KALIMANTAN SELATAN',
            ),
            22 => 
            array (
                'id' => '64',
                'name' => 'KALIMANTAN TIMUR',
            ),
            23 => 
            array (
                'id' => '65',
                'name' => 'KALIMANTAN UTARA',
            ),
            24 => 
            array (
                'id' => '71',
                'name' => 'SULAWESI UTARA',
            ),
            25 => 
            array (
                'id' => '72',
                'name' => 'SULAWESI TENGAH',
            ),
            26 => 
            array (
                'id' => '73',
                'name' => 'SULAWESI SELATAN',
            ),
            27 => 
            array (
                'id' => '74',
                'name' => 'SULAWESI TENGGARA',
            ),
            28 => 
            array (
                'id' => '75',
                'name' => 'GORONTALO',
            ),
            29 => 
            array (
                'id' => '76',
                'name' => 'SULAWESI BARAT',
            ),
            30 => 
            array (
                'id' => '81',
                'name' => 'MALUKU',
            ),
            31 => 
            array (
                'id' => '82',
                'name' => 'MALUKU UTARA',
            ),
            32 => 
            array (
                'id' => '91',
                'name' => 'PAPUA BARAT',
            ),
            33 => 
            array (
                'id' => '94',
                'name' => 'PAPUA',
            ),
        ));
        
        
    }
}