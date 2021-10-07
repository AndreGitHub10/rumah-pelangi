<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DataYatimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_yatim')->insert([
            'nama_anak' => 'Sifulan',
            'alamat' => "Kauman, Mojosari, Mojokerto",
            'tempat_lahir' => 'Mojokerto',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'no_hp' => '0888732873287'
        ]);
    }
}
