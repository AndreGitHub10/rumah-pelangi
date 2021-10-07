<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use App\Models\Donatur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $data['db_active'] = "keuangan";
        $data['sub_db_active'] = "pemasukan";
        $data['pemasukan'] = Pemasukan::all();
        $data['donatur'] = Donatur::all();
        return view('admin.pemasukan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        $data['db_active'] = "keuangan";
        $data['sub_db_active'] = "pemasukan";
        $data['donatur'] = Donatur::all();
        return view('admin.pemasukan.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // return $request->all();
        // if(!Donatur::where('nama_donatur', $request->nama_donatur)){
        //     $donatur = new Donatur;
        //     $donatur->nama_donatur = $request->nama_donatur;
        //     $donatur->alamat = $request->alamat;
        //     $donatur->no_hp = $request->no_hp;

        //     $donatur->save();
        // }
        $id_donatur = $request->id_donatur;
        if (!is_numeric($request->id_donatur)) {
            $id_donatur = Donatur::create([
                'nama_donatur' => $id_donatur,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp
            ])->id_donatur;            
        }
        
        $data = new Pemasukan;
        $data->jumlah_donasi = $request->jumlah_donasi;
        $data->id_donatur = $id_donatur;
        $data->tanggal_pemberian_donasi = $request->tanggal_pemberian_donasi;
        $data->save();

        
        return redirect('keuangan/pemasukan')->with('success', 'Donasi Donatur Berhasil Dimasukkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array();
        $data['db_active'] = "keuangan";
        $data['sub_db_active'] = "pemasukan";
        $data['pemasukan'] = Pemasukan::find($id);
        return view('admin.pemasukan.update', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $data = Pemasukan::find($id);
        $data->jumlah_donasi = $request->jumlah_donasi;
        $data->tanggal_pemberian_donasi = $request->tanggal_pemberian_donasi;

        $data->save();
        if ($data) {
            return redirect('keuangan/pemasukan')->with('success', 'Update Data Berhasil Dirubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $pemasukan = Pemasukan::where('id', $request->id)->first();

        if (!empty($pemasukan)) {
            
            $pemasukan->delete();

            $return = ['status'=>'success','code'=>200,'message'=>'Berhasil Menghapus Data'];
        } else {
            $return = ['status'=>'error','code'=>250,'message'=>'Gagal Menghapus Data'];
        }

        return $return;
    }

    public function getDataDonatur(Request $request)
  {
    // return $request->all();
    $id_donatur = $request->id_donatur;
    $data = Donatur::where('id_donatur', $request->id_donatur)->first();
    if (!empty($data)) {
      $return = ['status' => 'success', 'message' => 'Berkas Anda Ditemukan !!', 'data'=>$data];
    }else{
      $return = ['status' => 'error', 'message' => 'Berkas Anda Tidak Ditemukan !!', 'data'=>''];
    }
    return $return;
  }
}
