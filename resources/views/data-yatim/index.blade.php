@extends('layouts.app')

@section('content')
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="#" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Data Anak Yatim</a>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
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
                    @foreach($data_yatim2 as $dt)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td><div class="col-2 text-truncate">{{ $dt->nama_anak }}</div></td>
                      <td>{{ $dt->alamat }}</td>
                      <td>{{ $dt->tempat_lahir}}</td>
                      <td>{{ $dt->tanggal_lahir}}</td>
                      <td>{{ $dt->no_hp}}</td>
                      <td>
                          <a href="" class="btn btn-warning">Update</a> 
                        <a href="" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                     @endforeach
                   
                  </tbody>

                </table>
                 <br>
                {{ $data_yatim2->links() }} 
                </br>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>

@endsection