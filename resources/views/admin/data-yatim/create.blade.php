@extends('admin.layouts.app')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Yatim</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data" action="{{ route('data_yatimStore')}}">
              	@csrf
                <div class="card-body">
                  	<div class="form-group">
                    <label for="nama_anak">Nama</label>
                    <input name="nama_anak" type="textarea" class="form-control" id="nama_anak" placeholder="Masukkan Nama">
                  </div>

	              <div class="form-group">
	                    <label for="alamat">Alamat</label>
	                    <input name="alamat" type="textarea" class="form-control" id="alamat" placeholder="Masukkan Alamat">
	              </div>

	              <div class="form-group">
	                    <label for="tempat_lahir">Tempat Lahir</label>
	                    <input name="tempat_lahir" type="textarea" class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat Lahir">
	              </div>

	              <div class="form-group">
	                    <label for="tanggal_lahir">Tanggal Lahir</label>
	                    <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" placeholder="Masukkan Tempat Lahir">
	              </div>

	              <div class="form-group">
	                    <label for="no_hp">Nomor Telepon</label>
	                    <input name="no_hp" type="text" class="form-control" id="no_hp" placeholder="Masukkan Nomor Telepon">
	              </div>

                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection