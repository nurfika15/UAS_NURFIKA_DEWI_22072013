@extends('layout');
@section('title','UAS | UHTP')
@section('page_title','Paket')
@section('page_name','Paket')
@section('page_subname','Data Paket Wifi')
@section('app_name','Aplikasi Data Pelanggan Wifi')
@section('user_name','Nur Fika Dewi')
@section('konten')

<div class="row">
    <!-- Custom tabs (Charts with tabs)-->
    <section class="col-lg-12 connectedSortable">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-wifi"></i>
                    Data Paket Wifi
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
            <a href="{{ route('tambah_paket') }}" class="btn btn-sm btn-primary mb-2">Tambah</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th style="width: 10px">NO</th>
                        <th>JENIS PAKET</th>
                        <th>HARGA PAKET</th>
                        <th style="width: 150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($data as $paket)
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $paket->nama_paket }}</td>
                        <td>{{ $paket->harga_paket }}</td>
                        <td><a href="{{ route('edit_paket',$paket->id) }}" class="btn btn-xs btn-warning">Edit</a> | <a href="{{ route('delete_paket',$paket->id) }}" class="btn btn-danger btn-xs">Delete</a></td>
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