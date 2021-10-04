<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(DataYatimSeeder::class);
        $this->call(DonaturSeeder::class);
        $this->call(PemasukanSeeder::class);
        $this->call(PengeluaranSeeder::class);
        $this->call(UserSeeder::class);
    }
}
