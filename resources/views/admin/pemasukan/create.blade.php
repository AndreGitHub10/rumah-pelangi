@extends('admin.layouts.app')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Pemasukan Donasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data" action="{{ route('pemasukanStore')}}">
              	@csrf

                <div class="card-body">
                  <div class="form-group">
                    <label for="jumlah_donasi">Nama Donatur</label>
                    <select name="id_donatur" class="form-control" id="nama_donatur" class="form-control" style="margin: 20px;">
                      <option>Pilih Nama Donatur</option>
                      @foreach($donatur as $dt)
                    <option value="{{ $dt->id_donatur}}">{{ $dt->nama_donatur}}</option>
                      @endforeach
                  </select>

                  </div>

                  <div class="form-group">
                    <label for="jumlah_donasi">Alamat</label>
                    <input name="alamat" type="textarea" class="form-control" id="alamat" placeholder="Masukkan Alamat">
                  </div>

                  <div class="form-group">
                    <label for="jumlah_donasi">No. Telepon</label>
                    <input name="no_hp" type="textarea" class="form-control" id="no_hp" placeholder="Masukkan Nomor Telepon">
                  </div>

                 
                
                </div>
                <!-- /.card-body -->

                <div class="card-body">
                    <div class="form-group">
                    <label for="jumlah_donasi">Jumlah Donasi</label>
                    <input name="jumlah_donasi" type="textarea" class="form-control" id="jumlah_donasi" placeholder="Rp.">
                  </div>

                <div class="form-group">
                      <label for="tanggal_pemberian_donasi">Tanggal Donasi</label>
                      <input name="tanggal_pemberian_donasi" type="date" class="form-control" id="tanggal_pemberian_donasi" placeholder="Masukkan Tanggal">
                </div>
                
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>


@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>

  $("#nama_donatur").select2({
       tags: true
  });

  $("#nama_donatur").change(function(){
        var id_donatur = $('#nama_donatur').val();
        console.log(id_donatur);
        $.post("{!! route('getDataDonatur') !!}", {
            id_donatur: id_donatur
        }).done(function(data){
          if (data.status == 'success') {
                // $('#nama_donatur').val(data.data.nama_donatur);
                $('#alamat').val(data.data.alamat);
                $('#no_hp').val(data.data.no_hp);
          }
          else {
                // $('#nama_donatur').val("");
                $('#alamat').val("");
                $('#no_hp').val("");
          }
        })

  });
</script>
@stop
