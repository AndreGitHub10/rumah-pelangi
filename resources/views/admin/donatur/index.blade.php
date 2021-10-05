@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('donaturStore') }}" method="post" class="f1">
                        @csrf
                        <fieldset>
                            <div class="row g-3">
                                <h4>Identitas Donatur</h4>
                                <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_donatur">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">Nomer HP</label>
                                    <input type="text" class="form-control" placeholder="No KTP" name="no_hp">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputAddress" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Kota" name="alamat">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputAddress" class="form-label">Total Donasi</label>
                                    <input type="text" class="form-control" id="inputdate" name="total_donasi" placeholder="Rp. 0">
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="f1-buttons">
                                        <br>
                                        <button type="submit" class="btn btn-primary btn-submit"><i class="fa fa-save"></i> Submit</button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>         
@stop