<?php

namespace App\Http\Controllers;

use App\Models\Donatur;
use App\Models\Pemasukan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonaturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $data['db_active'] = "donatur";
        $data['sub_db_active'] = "";
        $data['donatur'] = Donatur::all();
        return view('admin.donatur.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        $data['db_active'] = "donatur";
        $data['sub_db_active'] = "";
        return view('admin.donatur.create', $data);
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
            'min' => ':attribute harus diisi minimal :min karakter !',
            'max' => ':attribute harus diisi maksimal :max karakter !',
            'numeric' => ':attribute harus diisi angka !',
        ];
        
        $this->validate($request,[
            'nama_donatur' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            
        ],$pesan);

        $data = new Donatur();
        $data->nama_donatur = $request->nama_donatur;
        $data->no_hp = $request->no_hp;
        $data->alamat = $request->alamat;

        $data->save();

        return redirect('donatur')->with('success', 'Data Donatur Berhasil Dimasukkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_donatur)
    {
        $data['db_active'] = "donatur";
        $data['sub_db_active'] = "";
        $data['donatur'] = Donatur::where('id_donatur', $id_donatur)->first();
        return view('admin.donatur.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_donatur)
    {
        $data = array();
        $data['db_active'] = "donatur";
        $data['sub_db_active'] = "";
        $data['donatur'] = Donatur::where('id_donatur', $id_donatur)->first();
        return view('admin.donatur.update', $data);
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
        $id_donatur = $request->id_donatur;
        $data = Donatur::find($id_donatur);
        $data->nama_donatur = $request->nama_donatur;
        $data->no_hp = $request->no_hp;
        $data->alamat = $request->alamat;

        $data->save();
        if ($data) {
            return redirect('donatur')->with('success', 'Update Data Berhasil Dirubah!');
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
        $donatur = Donatur::where('id_donatur', $request->id_donatur)->first();

        if (!empty($donatur)) {
            
            $donatur->delete();

            $return = ['status'=>'success','code'=>200,'message'=>'Berhasil Menghapus Data'];
        } else {
            $return = ['status'=>'error','code'=>250,'message'=>'Gagal Menghapus Data'];
        }

        return $return;
    }
}
