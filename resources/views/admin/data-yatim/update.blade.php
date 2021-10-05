@extends('admin.layouts.app')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Data Yatim</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data" action="{{ route('data_yatimUpdate')}}">
              	@csrf
                <div class="card-body">
                  	<div class="form-group">
                    <label for="nama_anak">Nama</label>
                    <input type="hidden" name="id" value="{{$data_yatim->id}}">
                    <input value="{{ $data_yatim->nama_anak }}" name="nama_anak" type="textarea" class="form-control" id="nama_anak" placeholder="Masukkan Nama">
                  </div>

	              <div class="form-group">
	                    <label for="alamat">Alamat</label>
	                    <input value="{{ $data_yatim->alamat }}" name="alamat" type="textarea" class="form-control" id="alamat" placeholder="Masukkan Alamat">
	              </div>

	              <div class="form-group">
	                    <label for="tempat_lahir">Tempat Lahir</label>
	                    <input value="{{ $data_yatim->tempat_lahir }}" name="tempat_lahir" type="textarea" class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat Lahir">
	              </div>

	              <div class="form-group">
	                    <label for="tanggal_lahir">Tanggal Lahir</label>
	                    <input value="{{ $data_yatim->tanggal_lahir }}" name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" placeholder="Masukkan Tempat Lahir">
	              </div>

	              <div class="form-group">
	                    <label for="no_hp">Nomor Telepon</label>
	                    <input value="{{ $data_yatim->no_hp }}" name="no_hp" type="text" class="form-control" id="no_hp" placeholder="Masukkan Nomor Telepon">
	              </div>

                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button class="btn btn-warning" href="{{route('data_yatim')}}">Cancel</button>
                </div>
              </form>
            </div>
@endsection