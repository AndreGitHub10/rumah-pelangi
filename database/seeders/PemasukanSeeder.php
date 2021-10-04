<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PemasukanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pemasukan')->insert([
            'jumlah_donasi' => '1000000',
            'id_donatur' => '1',
            'tanggal_pemberian_donasi' => Carbon::parse('2000-01-01')
        ]);
    }
}
