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
                    <input name="jumlah_donasi" type="textarea" class="form-control" id="jumlah_donasi" placeholder="Masukkan Nama">
                  </div>

                  <div class="form-group">
                    <label for="jumlah_donasi">Alamat</label>
                    <input name="jumlah_donasi" type="textarea" class="form-control" id="jumlah_donasi" placeholder="Masukkan Alamat">
                  </div>

                  <div class="form-group">
                    <label for="jumlah_donasi">No. Telepon</label>
                    <input name="jumlah_donasi" type="textarea" class="form-control" id="jumlah_donasi" placeholder="Masukkan Nomor Telepon">
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

<script>
  $("select[name='selection']").change(function() {
     var selected = $(this).find("option:selected").text();
     $("input[name='hid']").val(selected);
     if (selected == "0") 
          $("input[name='hid']").attr("type", "text");
     else
          $("input[name='hid']").attr("type", "hidden");
});
</script>
@endsection
