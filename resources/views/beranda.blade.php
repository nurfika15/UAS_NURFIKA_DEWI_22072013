@extends('layout');
@section('title','UAS | UHTP')
@section('page_title','Beranda')
@section('page_name','Beranda')
@section('page_subname','beranda')
@section('app_name','Aplikasi Data Pelanggan Wifi')
@section('user_name','Nur Fika Dewi')
@section('konten')
<div class="row">
    <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>0</h3>

            <p>Total Pelanggan</p>
            </div>
            <div class="icon">
            <i class="fa fa-book"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
            <h3>0</h3>

            <p>Pelanggan Baru Bulan Ini</p>
            </div>
            <div class="icon">
            <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
<!-- ./col -->
    <div class="col-lg-4 col-6">
    <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
            <h3>0</h3>

            <p>Pelanggan Nunggak</p>
            </div>
            <div class="icon">
            <i class="fa fa-upload"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
<!-- ./col -->
</div>
@endsection