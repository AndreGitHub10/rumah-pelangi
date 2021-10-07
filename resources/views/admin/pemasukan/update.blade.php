@extends('admin.layouts.app')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Donasi Pemasukan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data" action="{{ route('pemasukanUpdate')}}">
              	@csrf
                <div class="card-body">
                    <div class="form-group">
                    <label for="jumlah_donasi">Jumlah Donasi</label>
                    <input type="hidden" name="id" value="{{$pemasukan->id}}">
                    <input value="{{$pemasukan->jumlah_donasi}}" name="jumlah_donasi" type="textarea" class="form-control" id="jumlah_donasi" placeholder="Rp.">
                  </div>

                <div class="form-group">
                      <label for="tanggal_pemberian_donasi">Tanggal Donasi</label>
                      <input value="{{$pemasukan->tanggal_pemberian_donasi}}" name="tanggal_pemberian_donasi" type="date" class="form-control" id="tanggal_pemberian_donasi" placeholder="Masukkan Tanggal">
                </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  
                </div>
              </form>
            </div>
@endsection