@extends('adminlte.master')

@section('content')

<h1>Daftar Pertanyaan</h1>

<a href="/pertanyaan/create" class="btn btn-primary">
  Isi Pertanyaan Baru
</a>
<!-- Main content -->
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Nomor</th>
                <th>Judul</th>
                <th>Isi Pertanyaan</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($items as $key => $item)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->judul}}</td>
                    <td>{{$item->isi}}</td>
                  </tr>
               @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Nomor</th>
                <th>Judul</th>
                <th>Isi Pertanyaan</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->


@endsection