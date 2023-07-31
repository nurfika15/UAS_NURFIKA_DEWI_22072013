@extends('layout');
@section('title','UAS | UHTP')
@section('page_title','Paket')
@section('page_name','Pelanggan')
@section('page_subname','Data Pelanggan')
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
                    Data Pelanggan
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
            <a href="{{ route('tambah_pelanggan') }}" class="btn btn-sm btn-primary mb-2">Tambah</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th style="width: 10px">NO</th>
                        <th>KODE PELANGGAN</th>
                        <th>NAMA PELANGGAN</th>
                        <th>ALAMAT</th>
                        <th>TELP</th>
                        <th>PAKET</th>
                        <th style="width: 150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($data as $pelanggan)
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pelanggan->kode_pelanggan }}</td>
                        <td>{{ $pelanggan->nama_pelanggan }}</td>
                        <td>{{ $pelanggan->alamat }}</td>
                        <td>{{ $pelanggan->no_telp }}</td>
                        <td>{{ App\Http\Controllers\PelangganControllerNurFikaDewi::get_paket($pelanggan->paket_id) }}</td>
                        <td><a href="{{ route('edit_pelanggan',$pelanggan->id) }}" class="btn btn-xs btn-warning">Edit</a> | <a href="{{ route('delete_pelanggan',$pelanggan->id) }}" class="btn btn-danger btn-xs">Delete</a></td>
                        </tr>
                        @empty
                        <tr>
                        <td colspan="7" class="text-center">No data</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div><!-- /.card-body -->
        </div>
    </section>
</div>

@endsection