@extends('adminlte.master')

@section('content')

<div class="container">
  <!-- general form elements -->
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Buat Pertanyaan</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" action="{{url('/pertanyaan')}}" method="POST">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="judul">Judul Pertanyaan</label>
        <input type="text" class="form-control" name="judul" id="judul">
      </div>
      <div class="form-group">
        <label for="isi">Isi Pertanyaan</label>
        <textarea type="text" class="form-control" name="isi" id="isi"></textarea>
        <input hidden name="tanggal_dibuat" value="{{\Carbon\Carbon::now()}}">
        <input hidden name="tanggal_diperbarui" value="{{\Carbon\Carbon::now()}}">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
</div>


@endsection