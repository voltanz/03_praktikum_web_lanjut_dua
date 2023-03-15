@push('js')
<script>
  alert('Selamat Datang');
</script>
@endpush

@extends('layouts.app')

@section('content')
    
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
                  <!-- Map card -->
                  <div class="card bg-gradient-primary">
                    <div style="margin: 30px">
                      <h1 >Selamat Datang</h1>
                    </div>
                  </div>
                  <!-- /.card -->
    </div>
</section>
  <!-- /.content-wrapper -->
@endsection