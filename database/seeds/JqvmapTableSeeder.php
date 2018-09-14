<?php

use Illuminate\Database\Seeder;

class JqvmapTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jqvmap')->delete();
        
        \DB::table('jqvmap')->insert(array (
            0 => 
            array (
                'id' => 1,
                'wilayah_id' => 1,
                'path' => 'path01',
                'name' => 'Aceh',
            ),
            1 => 
            array (
                'id' => 2,
                'wilayah_id' => 6728,
                'path' => 'path02',
                'name' => 'Sumatera Utara',
            ),
            2 => 
            array (
                'id' => 3,
                'wilayah_id' => 12920,
                'path' => 'path03',
                'name' => 'Sumatera Barat',
            ),
            3 => 
            array (
                'id' => 4,
                'wilayah_id' => 14086,
                'path' => 'path04',
                'name' => 'Riau',
            ),
            4 => 
            array (
                'id' => 5,
                'wilayah_id' => 15885,
                'path' => 'path05',
                'name' => 'Jambi',
            ),
            5 => 
            array (
                'id' => 6,
                'wilayah_id' => 17404,
                'path' => 'path06',
                'name' => 'Sumatera Selatan',
            ),
            6 => 
            array (
                'id' => 7,
                'wilayah_id' => 20802,
                'path' => 'path07',
                'name' => 'Bengkulu',
            ),
            7 => 
            array (
                'id' => 8,
                'wilayah_id' => 22328,
                'path' => 'path08',
                'name' => 'Lampung',
            ),
            8 => 
            array (
                'id' => 9,
                'wilayah_id' => 24993,
                'path' => 'path09',
                'name' => 'Kep. Bangka Belitung',
            ),
            9 => 
            array (
                'id' => 10,
                'wilayah_id' => 25405,
                'path' => 'path10',
                'name' => 'Kep. Riau',
            ),
            10 => 
            array (
                'id' => 11,
                'wilayah_id' => 25823,
                'path' => 'path11',
                'name' => 'DKI Jakarta',
            ),
            11 => 
            array (
                'id' => 12,
                'wilayah_id' => 26141,
                'path' => 'path12',
                'name' => 'Jawa Barat',
            ),
            12 => 
            array (
                'id' => 13,
                'wilayah_id' => 32676,
                'path' => 'path13',
                'name' => 'Jawa Tengah',
            ),
            13 => 
            array (
                'id' => 14,
                'wilayah_id' => 51578,
                'path' => 'path14',
                'name' => 'Banten',
            ),
            14 => 
            array (
                'id' => 15,
                'wilayah_id' => 42385,
                'path' => 'path15',
                'name' => 'Jawa Timur',
            ),
            15 => 
            array (
                'id' => 16,
                'wilayah_id' => 41863,
                'path' => 'path16',
                'name' => 'Yogyakarta',
            ),
            16 => 
            array (
                'id' => 17,
                'wilayah_id' => 53241,
                'path' => 'path17',
                'name' => 'Bali',
            ),
            17 => 
            array (
                'id' => 18,
                'wilayah_id' => 54020,
                'path' => 'path18',
                'name' => 'Nusa Tenggara Barat',
            ),
            18 => 
            array (
                'id' => 19,
                'wilayah_id' => 55065,
                'path' => 'path19',
                'name' => 'Nusa Tenggara Timur',
            ),
            19 => 
            array (
                'id' => 20,
                'wilayah_id' => 58285,
                'path' => 'path20',
                'name' => 'Kalimantan Barat',
            ),
            20 => 
            array (
                'id' => 21,
                'wilayah_id' => 60371,
                'path' => 'path21',
                'name' => 'Kalimantan Tengah',
            ),
            21 => 
            array (
                'id' => 22,
                'wilayah_id' => 61965,
                'path' => 'path22',
                'name' => 'Kalimantan Selatan',
            ),
            22 => 
            array (
                'id' => 23,
                'wilayah_id' => 64111,
                'path' => 'path23',
                'name' => 'Kalimantan Timur',
            ),
            23 => 
            array (
                'id' => 24,
                'wilayah_id' => 928068,
                'path' => 'path24',
                'name' => 'Kalimantan Utara',
            ),
            24 => 
            array (
                'id' => 25,
                'wilayah_id' => 65702,
                'path' => 'path25',
                'name' => 'Sulawesi Utara',
            ),
            25 => 
            array (
                'id' => 26,
                'wilayah_id' => 67393,
                'path' => 'path26',
                'name' => 'Sulawesi Tengah',
            ),
            26 => 
            array (
                'id' => 27,
                'wilayah_id' => 69268,
                'path' => 'path27',
                'name' => 'Sulawesi Selatan',
            ),
            27 => 
            array (
                'id' => 28,
                'wilayah_id' => 72551,
                'path' => 'path28',
                'name' => 'Sulawesi Tenggara',
            ),
            28 => 
            array (
                'id' => 29,
                'wilayah_id' => 74716,
                'path' => 'path29',
                'name' => 'Gorontalo',
            ),
            29 => 
            array (
                'id' => 30,
                'wilayah_id' => 75425,
                'path' => 'path30',
                'name' => 'Sulawesi Barat',
            ),
            30 => 
            array (
                'id' => 31,
                'wilayah_id' => 76096,
                'path' => 'path31',
                'name' => 'Maluku',
            ),
            31 => 
            array (
                'id' => 32,
                'wilayah_id' => 77085,
                'path' => 'path32',
                'name' => 'Maluku Utara',
            ),
            32 => 
            array (
                'id' => 33,
                'wilayah_id' => 78203,
                'path' => 'path33',
                'name' => 'Papua',
            ),
            33 => 
            array (
                'id' => 34,
                'wilayah_id' => 81877,
                'path' => 'path34',
                'name' => 'Papua Barat',
            ),
        ));
        
        
    }
}