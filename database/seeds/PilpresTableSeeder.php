<?php

use Illuminate\Database\Seeder;

class PilpresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pilpres')->delete();
        
        \DB::table('pilpres')->insert(array (
            0 => 
            array (
                'id' => 3,
                'capres_name' => 'Ir. H. JOKO WIDODO',
                'capres_dob' => '1961-06-21',
                'capres_pob' => 'Surakarta',
                'capres_partai' => 'PKB,PKPI,PDIP,Nasdem,Hanura,PPP,Golkar',
            'cawapres_name' => 'Prof. Dr. (HC). KH. MA\'RUF AMIN',
                'cawapres_dob' => '1943-03-11',
                'cawapres_pob' => 'Tangerang',
                'cawapres_partai' => 'PKB,PKPI,PDIP,Nasdem,Hanura,PPP,Golkar',
                'type' => NULL,
                'note' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-09-12 17:31:04',
                'updated_at' => '2018-09-12 17:31:04',
            ),
            1 => 
            array (
                'id' => 4,
                'capres_name' => 'H. PRABOWO SUBIANTO',
                'capres_dob' => '1951-10-17',
                'capres_pob' => 'Jakarta',
                'capres_partai' => 'Demokrat,PKS,Gerindra,PAN',
                'cawapres_name' => 'SANDIAGA SALAHUDDIN UNO, MBA.',
                'cawapres_dob' => '1969-06-28',
                'cawapres_pob' => 'Rumbai',
                'cawapres_partai' => 'Demokrat,PKS,Gerindra,PAN',
                'type' => NULL,
                'note' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-09-12 17:31:04',
                'updated_at' => '2018-09-12 17:31:04',
            ),
        ));
        
        
    }
}