<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    use TruncateTable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(AuthTableSeeder::class);

        Model::reguard();
        $this->call(GenresTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(LicensorsTableSeeder::class);
        $this->call(VenuesTableSeeder::class);
    }
}
