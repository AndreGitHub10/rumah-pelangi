@extends('admin.layouts.app')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Data Pengeluaran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data" action="{{ route('pengeluaranUpdate')}}">
              	@csrf
                <div class="card-body">
                  	<div class="form-group">
                    <label for="jumlah_pengeluaran">Jumlah Pengeluaran</label>
                    <input type="hidden" name="id" value="{{ $pengeluaran->id}}">
                    <input value="{{ $pengeluaran->jumlah_pengeluaran }}" name="jumlah_pengeluaran" type="textarea" class="form-control" id="jumlah_pengeluaran" placeholder="Masukkan Nama">
                  </div>

	              <div class="form-group">
	                    <label for="tanggal_pengeluaran">Tanggal Pengeluaran</label>
	                    <input value="{{ $pengeluaran->tanggal_pengeluaran }}" name="tanggal_pengeluaran" type="date" class="form-control" id="tanggal_pengeluaran" placeholder="Masukkan Alamat">
	              </div>

	              <div class="form-group">
	                    <label for="keterangan">Keterangan</label>
	                    <input value="{{ $pengeluaran->keterangan }}" name="keterangan" type="textarea" class="form-control" id="keterangan" placeholder="Masukkan Tempat Lahir">
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