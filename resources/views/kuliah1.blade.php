@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pengalaman Kuliah</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pengalaman Kuliah azzam</li>
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
                    <h4 style="font-weight: bold">Pengalaman Kuliah</h4><br><br>
                    <img src="dist/img/azzam.jpg" alt="foto azzam" style="width:200px"> <br><br> 
                    @foreach ($kuliah1 as $item)
                        
                    <!-- {{-- <h4 style="font-weight: bold">Abdullah Azzam | 2141720073</h4> --}} -->
                    <h4 style="font-weight: bold">{{$item->full_name}} | {{$item->nim}}</h4>
                    <p>{{$item->story}}</p>
                    @endforeach   
                </center>
            </div>
        </div>
        <!-- /.content -->
    </div>
</section>
  <!-- /.content-wrapper -->
@endsection