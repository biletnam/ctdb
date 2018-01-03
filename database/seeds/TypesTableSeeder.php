<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('types')->delete();
        
        \DB::table('types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Community',
                'user_id' => 1,
                'created_at' => '2017-12-11 20:47:05',
                'updated_at' => '2017-12-11 20:47:05',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Professional Equity',
                'user_id' => 1,
                'created_at' => '2017-12-11 20:47:15',
                'updated_at' => '2018-01-03 20:17:03',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}