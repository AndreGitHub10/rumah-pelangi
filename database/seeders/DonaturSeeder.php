<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DonaturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('donatur')->insert([
            'nama_donatur' => 'makhluk',
            'alamat' => "kauman, mojosari, mojokerto",
            'no_hp' => '0888732873287',
        ]);
    }
}
