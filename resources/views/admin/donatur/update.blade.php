@extends('admin.layouts.app')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Data Donatur</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data" action="{{ route('data_donaturUpdate')}}">
              	@csrf
                <div class="card-body">
                  	<div class="form-group">
                    <label for="nama_donatur">Nama</label>
                    <input type="hidden" name="id_donatur" value="{{$donatur->id_donatur}}">
                    <input value="{{ $donatur->nama_donatur }}" name="nama_donatur" type="textarea" class="form-control" id="nama_donatur" placeholder="Masukkan Nama">
                  </div>

	              <div class="form-group">
	                    <label for="no_hp">Nomer HP</label>
	                    <input value="{{ $donatur->no_hp }}" name="no_hp" type="textarea" class="form-control" id="no_hp" placeholder="Masukkan Alamat">
	              </div>

	              <div class="form-group">
	                    <label for="alamat">Alamat</label>
	                    <input value="{{ $donatur->alamat }}" name="alamat" type="textarea" class="form-control" id="alamat" placeholder="Masukkan Tempat Lahir">
	              </div>

                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button class="btn btn-warning" href="{{route('donatur', $donatur)}}">Cancel</button>
                </div>
              </form>
            </div>
@endsection