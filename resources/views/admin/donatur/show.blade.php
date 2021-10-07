@extends('admin.layouts.app')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Data Donatur</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
              	
                <div class="card-body">
                  	<div class="form-group">
                    <label for="nama_donatur">Nama</label>
                    <input type="hidden" name="id" value="{{$donatur->id_donatur}}">
                    <input disabled value="{{ $donatur->nama_donatur }}" name="nama_anak" type="textarea" class="form-control" id="nama_donatur" placeholder="Masukkan Nama">
                  </div>

                  <div class="form-group">
                    <label for="no_hp">Nomor Telepon</label>
                    <input disabled value="{{ $donatur->no_hp }}" name="no_hp" type="text" class="form-control" id="no_hp" placeholder="Masukkan Nomor Telepon">
                </div>

	              <div class="form-group">
	                    <label for="alamat">Alamat</label>
	                    <input disabled value="{{ $donatur->alamat }}" name="alamat" type="textarea" class="form-control" id="alamat" placeholder="Masukkan Alamat">
	              </div>

	              
	              	
                  <button class="btn btn-warning"><a href="{{route('donatur')}}">Cancel</a></button>
                
                  
                </div>
                <!-- /.card-body -->

                
              </form>
            </div>
@endsection