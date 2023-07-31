@extends('layout');
@section('title','UAS | UHTP')
@section('page_title','Pelanggan')
@section('page_name','Pelanggan')
@section('page_subname','Edit Pelanggan')
@section('app_name','Aplikasi Data Pelanggan Wifi')
@section('user_name','Nur Fika Dewi')
@section('konten')

<div class="row">
    <!-- Custom tabs (Charts with tabs)-->
    <section class="col-lg-12 connectedSortable">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-th"></i>
                    Edit Pelanggan
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
            <form action="{{ route('update_pelanggan') }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">KODE PELANGGAN</label>
                    <input value="{{ $pelanggan->id }}" name="id_data" type="hidden">
                    <input value="{{ $pelanggan->kode_pelanggan }}" name="kode" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter KODE PELANGGAN">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">NAMA PELANGGAN</label>
                    <input value="{{ $pelanggan->nama_pelanggan }}" name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter NAMA PELANGGAN">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">ALAMAT</label>
                    <input value="{{ $pelanggan->alamat }}" name="alamat" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter ALAMAT">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">TELEPON</label>
                    <input value="{{ $pelanggan->no_telp }}" name="tlp" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter TELEPON">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">PAKET</label>
                    <select name="paket" id="" class="form-control">
                        <option value="{{ $pelanggan->paket_id }}" selected>{{ App\Http\Controllers\PelangganControllerNurFikaDewi::get_paket($pelanggan->paket_id) }}</option>
                      @foreach ($paket_jns as $pket)
                        <option value="{{ $pket->id }}">{{ $pket->nama_paket }}</option>
                      @endforeach
                    </select>
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