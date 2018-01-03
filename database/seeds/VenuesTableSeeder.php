<?php

use Illuminate\Database\Seeder;

class VenuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('venues')->delete();
        
        \DB::table('venues')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'New London Theater',
                'address1' => '2338 Henry Clower Blvd',
                'address2' => NULL,
                'city' => 'Snellville',
                'state' => 'GA',
                'zip' => '30078',
                'contact' => 'Dawn Berlo',
                'phone' => '+17705591484',
                'email' => 'information@newlondontheatre.org',
                'description' => 'We are located at the corner of Knollwood and US 78 inside the Hello Again Variety Mall in New London Plaza.',
                'weblink' => 'http://www.newlondontheatre.org/',
                'facebooklink' => 'https://www.facebook.com/NewLondonTheatre',
                'twitterlink' => 'https://twitter.com/newlondontheatr',
                'youtubelink' => NULL,
                'instagramlink' => NULL,
                'active' => 1,
                'user_id' => 1,
                'created_at' => '2017-12-11 20:55:16',
                'updated_at' => '2018-01-03 20:30:34',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}