@extends('admin.layouts.app')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Pengeluaran</h3>
              </div>
              <br>
              <div class="container">
                            {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
               </div>  
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data" action="{{ route('donaturStore')}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                    <label for="nama_donatur">Nama Lengkap</label>
                    <input name="nama_donatur" type="textarea" class="form-control" id="nama_donatur" placeholder="Masukkan Nama Lengkap">
                  </div>

                  <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input name="alamat" type="textarea" class="form-control" id="alamat" placeholder="Masukkan Alamat">
                  </div>

                 <div class="form-group">
                      <label for="no_hp">No. Telepon</label>
                      <input name="keterangan" type="textarea" class="form-control" id="keterangan" placeholder="Masukkan No. Telepon">
                </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                   <button class="btn btn-warning"><a href="{{route('donatur')}}">Cancel</a></button>
                </div>
              </form>
              
            </div>
@endsection