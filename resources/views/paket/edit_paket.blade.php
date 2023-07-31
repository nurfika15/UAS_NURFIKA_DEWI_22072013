@extends('layout');
@section('title','UAS | UHTP')
@section('page_title','Paket')
@section('page_name','Paket')
@section('page_subname','Edit Paket Wifi')
@section('app_name','Aplikasi Data Pelanggan Wifi')
@section('user_name','Nur Fika Dewi')
@section('konten')

<div class="row">
    <!-- Custom tabs (Charts with tabs)-->
    <section class="col-lg-12 connectedSortable">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-users"></i>
                    Edit Paket
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
            <form action="{{ route('update_paket') }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NAMA PAKET</label>
                    <input value="{{ $paket->id }}" name="id_data" type="hidden">
                    <input value="{{ $paket->nama_paket }}" name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter NAMA PAKET">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">HARGA PAKET</label>
                    <input value="{{ $paket->harga_paket }}" name="harga" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter HARGA PAKET">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div><!-- /.card-body -->
        </div>
    </section>
</div>

@endsection