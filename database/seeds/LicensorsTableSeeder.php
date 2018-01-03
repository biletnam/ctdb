<?php

use Illuminate\Database\Seeder;

class LicensorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('licensors')->delete();
        
        \DB::table('licensors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Music Theatre International',
                'weblink' => 'https://www.mtishows.com',
                'user_id' => 1,
                'created_at' => '2018-01-03 20:21:55',
                'updated_at' => '2018-01-03 20:25:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Samuel French',
                'weblink' => 'http://www.samuelfrench.com/',
                'user_id' => 1,
                'created_at' => '2018-01-03 20:22:57',
                'updated_at' => '2018-01-03 20:22:57',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}