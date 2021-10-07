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
              <form method="post" enctype="multipart/form-data" action="{{ route('pengeluaranStore')}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                    <label for="jumlah_pengeluaran">Jumlah Pengeluaran</label>
                    <input name="jumlah_pengeluaran" type="textarea" class="form-control" id="jumlah_pengeluaran" placeholder="Rp.">
                  </div>

                <div class="form-group">
                      <label for="tanggal_pengeluaran">Tanggal Pengeluaran</label>
                      <input name="tanggal_pengeluaran" type="date" class="form-control" id="tanggal_pengeluaran" placeholder="Masukkan Tempat Lahir">
                </div>
                
                 <div class="form-group">
                      <label for="keterangan">Keterangan</label>
                      <input name="keterangan" type="textarea" class="form-control" id="keterangan" placeholder="Masukkan Keterangan">
                </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                   <button class="btn btn-warning"><a  href="{{route('pengeluaran')}}">Cancel</a></button>
                </div>
              </form>
              
            </div>
@endsection