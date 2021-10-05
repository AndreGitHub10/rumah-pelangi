<?php

namespace App\Http\Controllers;

use App\Models\DataYatim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataYatimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = array();
        $data['db_active'] = "data_yatim";
        $data['sub_db_active'] = "";
        $data['data_yatim'] = DataYatim::all();
        return view('admin.data-yatim.index', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        $data['db_active'] = "data_yatim";
        $data['sub_db_active'] = "";
        return view('admin.data-yatim.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new DataYatim;
        $data->nama_anak = $request->nama_anak;
        $data->alamat = $request->alamat;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->no_hp = $request->no_hp;

        $data->save();
        return redirect('data_yatim');
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
        $data['db_active'] = "data_yatim";
        $data['sub_db_active'] = "";
        $data['data_yatim'] = DataYatim::find($id);
        return view('admin.data-yatim.update', $data);
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
        $data = DataYatim::find($id);
        $data->nama_anak = $request->nama_anak;
        $data->alamat = $request->alamat;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->no_hp = $request->no_hp;

        $data->save();
        if ($data) {
            return redirect('data_yatim');
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
        $data_yatim = DataYatim::where('id', $request->id)->first();

        if (!empty($data_yatim)) {
            
            $data_yatim->delete();

            $return = ['status'=>'success','code'=>200,'message'=>'Berhasil Menghapus Data'];
        } else {
            $return = ['status'=>'error','code'=>250,'message'=>'Gagal Menghapus Data'];
        }

        return $return;
    }
}

