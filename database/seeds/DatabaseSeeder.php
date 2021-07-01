<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SitesettingsTableSeeder::class);
        $this->call(AboutussettingTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(ConstructionTableSeeder::class);
        $this->call(OpinionsettingTableSeeder::class);

    }
}
