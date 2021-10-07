<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use App\Models\Donatur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengeluaranController extends Controller
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
        $data['sub_db_active'] = "pengeluaran";
        $data['pengeluaran'] = Pengeluaran::all();
        return view('admin.pengeluaran.index', $data);
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
        $data['sub_db_active'] = "pengeluaran";
        $data['pengeluaran'] = Pengeluaran::all();
        return view('admin.pengeluaran.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pesan = [
            'required' => ':Attribute Wajib Diisi !',
            'min' => ':Attribute harus diisi minimal :min karakter !',
            'max' => ':Attribute harus diisi maksimal :max karakter !',
            'numeric' => ':Attribute harus diisi angka !',
        ];
        
        $this->validate($request,[
            'jumlah_pengeluaran' => 'required|min:5',
            'tanggal_pengeluaran' => 'required',
            'keterangan' => 'required',
        ],$pesan);

        $data = new Pengeluaran;
        $data->jumlah_pengeluaran = $request->jumlah_pengeluaran;
        $data->tanggal_pengeluaran = $request->tanggal_pengeluaran;
        $data->keterangan = $request->keterangan;
            
        $data->save();

        return redirect('keuangan/pengeluaran')->with('success', 'Data Pengeluaran Berhasil!');
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
        $data['sub_db_active'] = "pengeluaran";
        $data['pengeluaran'] = Pengeluaran::find($id);
        return view('admin.pengeluaran.update', $data);
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
        $data = Pengeluaran::find($id);
        $data->jumlah_pengeluaran = $request->jumlah_pengeluaran;
        $data->tanggal_pengeluaran = $request->tanggal_pengeluaran;
        $data->keterangan = $request->keterangan;
            
        $data->save();

        return redirect('keuangan/pengeluaran')->with('success', 'Update Data Berhasil Dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $pengeluaran = Pengeluaran::where('id', $request->id)->first();

        if (!empty($pengeluaran)) {
            
            $pengeluaran->delete();

            $return = ['status'=>'success','code'=>200,'message'=>'Berhasil Menghapus Data'];
        } else {
            $return = ['status'=>'error','code'=>250,'message'=>'Gagal Menghapus Data'];
        }

        return $return;
    }
}
