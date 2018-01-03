<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('genres')->delete();
        
        \DB::table('genres')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Comedy',
                'user_id' => 1,
                'created_at' => '2018-01-03 20:17:58',
                'updated_at' => '2018-01-03 20:17:58',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Drama',
                'user_id' => 1,
                'created_at' => '2018-01-03 20:18:03',
                'updated_at' => '2018-01-03 20:18:03',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Musical',
                'user_id' => 1,
                'created_at' => '2018-01-03 20:18:09',
                'updated_at' => '2018-01-03 20:19:54',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}