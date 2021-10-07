<?php

namespace App\Http\Controllers;

use App\Models\DataYatim;
use Validator;
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
            $rules = array(
                'nama_anak' => 'required',
                'alamat' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
            );
            $messages = array(
                'required' => 'Kolom harus diisi!',
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if(!$validator->fails()){
                $data = new DataYatim;
                $data->nama_anak = $request->nama_anak;
                $data->alamat = $request->alamat;
                $data->tempat_lahir = $request->tempat_lahir;
                $data->tanggal_lahir = $request->tanggal_lahir;
                $data->no_hp = $request->no_hp;

                $data->save();
           
            if ($data) {
                return redirect('data_yatim')->with('success', 'Data Yatim Berhasil Dimasukkan!');
            } 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['db_active'] = "data_yatim";
        $data['sub_db_active'] = "";
        $data['data_yatim'] = DataYatim::where('id', $id)->first();

        return view('admin.data-yatim.show', $data);
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
            return redirect('data_yatim')->with('success', 'Update Data Berhasil Dirubah!');;
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

    public function proses(Request $request)
    {
        $pesan = [
            'required' => ':Attribute Wajib Diisi !',
            'min' => ':attribute harus diisi minimal :min karakter !',
            'max' => ':attribute harus diisi maksimal :max karakter !',
            'numeric' => ':attribute harus diisi angka !',
        ];
        
        $this->validate($request,[
            'nama_anak' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
        ],$pesan);

        $data = new DataYatim;
                $data->nama_anak = $request->nama_anak;
                $data->alamat = $request->alamat;
                $data->tempat_lahir = $request->tempat_lahir;
                $data->tanggal_lahir = $request->tanggal_lahir;
                $data->no_hp = $request->no_hp;

                $data->save();

        return redirect('data_yatim')->with('success', 'Data Yatim Berhasil Dimasukkan!');
    }
}

