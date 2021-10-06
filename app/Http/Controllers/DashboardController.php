<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = array();
        $data['db_active'] = "dashboard";
        $data['sub_db_active'] = "";
        $data['jumlah_data_yatim'] = count(DB::table('data_yatim')->get());
        $data['jumlah_donatur'] = count(DB::table('donatur')->get());
        // $data['hari'] = CarbonInterval::month()->totalDayz;
        // $kk = date("Y",strtotime($pem->tanggal_pemberian_donasi));
        // $tahun = '2000';
        // foreach ($pemasukan as $var => $tahun) {
            
        // }
        // $data['thn'] = ;
        
        // $month=date("F",$time);
        // $year=date("Y",strtotime($pemasukan->tanggal_pemberian_donasi));
        // ->where(date("Y",strtotime('tanggal_pemberian_donasi')),'2000')
        // return $data['pemasukan'];
        return view('admin.dashboard.index', $data);
    }
}
