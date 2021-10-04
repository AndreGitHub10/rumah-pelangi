<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PengeluaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengeluaran')->insert([
            'jumlah_pengeluaran' => '500000',
            'tanggal_pengeluaran' => Carbon::parse('2000-01-01'),
            'keterangan' => 'untuk membeli kasur'
        ]);
    }
}
