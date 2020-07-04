@extends('adminlte.master')

@section('content')

<h1>Daftar Pertanyaan</h1>

<a href="{{url('/pertanyaan/create')}}" class="btn btn-primary">
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
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($items as $key => $item)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->judul}}</td>
                    <td>{{$item->isi}}</td>
                    <td>
                      <a class="btn btn-primary" href="/jawaban/{{ $item->id }}" role="button">Lihat Jawaban</a>
                      <a class="btn btn-primary" href="/pertanyaan/{{ $item->id }}/edit" role="button">Ubah</a>
                      <a class="btn btn-primary" href="#" role="button">Hapus</a>
                    </td>
                  </tr>
               @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Nomor</th>
                <th>Judul</th>
                <th>Isi Pertanyaan</th>
                <th>Aksi</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->


@endsection