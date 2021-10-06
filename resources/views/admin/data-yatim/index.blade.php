@extends('admin.layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
@stop
@section('content')
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="{{ route('data_yatimCreate')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Data Anak Yatim</a>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <div class="input-group-append">
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-2">
                <table id="example" class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>No. Telp</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                   <tbody>
                    @foreach($data_yatim as $dt)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $dt->nama_anak }}</td>
                      <td><div class="col-2 text-truncate" style="max-width: 150px;">{{ $dt->alamat }}</div></td>
                      <td>{{ $dt->tempat_lahir}}</td>
                      <td>{{ $dt->tanggal_lahir}}</td>
                      <td>{{ $dt->no_hp}}</td>
                      <td>
                        <a href="{{  route('data_yatimEdit', $dt->id) }}" class="btn btn-warning"><i class="fa fa-upload">&nbsp;</i></a> 
                        <a href="{{ route('data_yatimShow', $dt->id)}}" class="btn btn-info"><i class="fa fa-folder">&nbsp;</i></a> 
                        <a href="javascript:void(0)" onclick="hapus_yatim(`{{$dt->id}}`)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </tr>
                     @endforeach
                   
                  </tbody>

                </table>
                 <br>
                </br>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );

 function hapus_yatim(id) {
      swal({
        title: "Apakah anda Yakin?",
        text: "Ingin Menghapus Data ini" ,
        icon: "warning",
        buttons: [
        'Batal',
        'Ya, saya Yakin!'
        ],
        dangerMode: true,
      }).then(function(isConfirm) {
        if (isConfirm) {
          $.post("{{route('data_yatimDestroy')}}", {id:id}).done((data) => {
            if (data.status == 'success') {
              swal('Berhasil',data.message,'success');
              window.location.reload()
            } else {
              swal('Gagal',data.message,'warning');
              window.location.reload()
            }
          })
        } else {
        }
      })
    }
</script>

@endsection

@section('js')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });
        
    @if (Session::has('message') && Session::get('status') == 'success')
        @if (Session::get('status') == 'success')
        swal("Success","{{Session::get('message')}}","success")
        @else
            swal("Success","{{Session::get('message')}}","error")
        @endif
    @endif
    </script>
@stop