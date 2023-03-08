@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Profil</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Profil</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="small-box bg-light" style="width: 200px auto">
            <div class="inner">
                <center>
                    <h4 style="font-weight: bold">Profil</h4><br><br>
                    <img src="dist/img/bima.png" alt="foto saya" style="width:200px"> <br><br>    
                    
                    <h4 style="font-weight: bold">
                        ----------------------------------------------------------------------------------------------------------------------------------------------
                    </h4>
                    <h4 style="font-weight: bold">Biodata</h4>
                    <h4 style="font-weight: bold">
                        ----------------------------------------------------------------------------------------------------------------------------------------------
                    </h4>
                    <div class="container text-left">
                        <h4> <b>
                            <div class="row">
                                <div class="col-sm-6 col-md-6">Nama Lengkap </div>
                                <div class="col-sm-6 col md 6       ">: {!! $full_name !!}</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6">Nama Panggilan </div>
                                <div class="col-sm-6 col md 6       ">: {!! $short_name !!}</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6">NIM </div>
                                <div class="col-sm-6 col md 6       ">: {!! $nim !!}</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6">Nomor Absen </div>
                                <div class="col-sm-6 col md 6       ">: {!! $absen !!}</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6">Kelas </div>
                                <div class="col-sm-6 col md 6       ">: {!! $class !!}</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6">Program Studi </div>
                                <div class="col-sm-6 col md 6       ">: {!! $prodi !!}</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6">Jurusan </div>
                                <div class="col-sm-6 col md 6       ">: {!! $jurusan !!}</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6">Perguruan Tinggi </div>
                                <div class="col-sm-6 col md 6       ">: {!! $kampus !!}</div>
                            </div>
                        </b>
                        </h4>
                    </div>
                    <h4 style="font-weight: bold">
                        ----------------------------------------------------------------------------------------------------------------------------------------------
                    </h4>
                    <h4 style="font-weight: bold">Contact</h4>
                    <h4 style="font-weight: bold">
                        ----------------------------------------------------------------------------------------------------------------------------------------------
                    </h4>
                    <div class="container text-left">
                        <h4> <b>
                            <div class="row">
                                <div class="col-sm-6 col-md-6">Email </div>
                                <div class="col-sm-6 col md 6       ">: {!! $email !!}</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6">Nomor Handphone (WA) </div>
                                <div class="col-sm-6 col md 6       ">: {!! $nohp !!}</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6">ID Instagram </div>
                                <div class="col-sm-6 col md 6       ">: {!! $ig !!}</div>
                            </div>
                        </b>
                        </h4>
                    </div>
                </center>
                <br>
            </div>
            </div>

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
@endsection