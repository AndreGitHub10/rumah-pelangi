@extends('admin.layouts.app')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Pengeluaran</h3>
              </div>
              <br>  
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data" action="{{ route('pengeluaranStore')}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                    <label for="jumlah_pengeluaran">Jumlah Pengeluaran</label>
                    <input name="jumlah_pengeluaran" type="textarea" class="form-control" id="jumlah_pengeluaran" placeholder="Masukkan Nama">
                  </div>

                <div class="form-group">
                      <label for="tanggal_pengeluaran">Tanggal Pengeluaran</label>
                      <input name="tanggal_pengeluaran" type="date" class="form-control" id="tanggal_pengeluaran" placeholder="Masukkan Tempat Lahir">
                </div>
                
                 <div class="form-group">
                      <label for="keterangan">Keterangan</label>
                      <input name="keterangan" type="textarea" class="form-control" id="keterangan" placeholder="Masukkan Alamat">
                </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection