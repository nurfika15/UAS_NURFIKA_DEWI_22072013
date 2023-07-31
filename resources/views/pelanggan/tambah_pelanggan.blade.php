@extends('layout');
@section('title','UAS | UHTP')
@section('page_title','Pelanggan')
@section('page_name','Pelanggan')
@section('page_subname','Tambah Pelanggan')
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
                    Tambah Pelanggan
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
            <form action="{{ route('simpan_pelanggan') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">KODE PELANGGAN</label>
                    <input name="kode" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter KODE PELANGGAN">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">NAMA PELANGGAN</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter NAMA PELANGGAN">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">ALAMAT</label>
                    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter ALAMAT">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">TELEPON</label>
                    <input name="tlp" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter TELEPON">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">PAKET</label>
                    <select name="paket" id="" class="form-control">
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