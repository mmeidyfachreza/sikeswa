@extends('admin.layout')
@section('content')
<section class="forms">
      <div class="container-fluid">
        <!-- Page Header-->
        <header>
          <h1 class="h3 display">Buku            </h1>
    </header>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
          <p>{{ $message }}</p>
    </div>
        @endif
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 style="float:left">Daftar Buku</h4>
                <div style="float:right">
                  <a href="{{route('modul.create')}}" class="btn btn-primary btn-sm">Tambah</a>
            </div>
          </div>
              <div class="card-body" >
                <div class="table-responsive">
                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tahun</th>
                        <th>File Diupload</th>
                        <th>Kategori</th>
                        <th>Publikasi</th>
                        <th>Aksi</th>
                  </tr>
                </thead>
                    <tbody>
                      <?php $x=1?>
                      @foreach ($modul as $data)
                      <tr>
                        <th scope="row">{{ $x++ }}</th>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->tahun}}</td>
                        <td>{{ $data->namafile }}</td>
                        <td>{{ $data->katmodul->nama }}</td>
                        <td>{{ $data->publikasi }}</td>
                        <td>
                          <a class="btn btn-danger" href="{{ route('modul.hapus', $data->uuid) }}"><i class="fa fa-trash-alt"></i></a>
                          <a class="btn btn-warning" href="{{ route('modul.edit', $data->uuid) }}"><i class="far fa-edit"></i></a>
                          <a class="btn btn-primary" href="{{ route('modul.download', $data->uuid) }}"><i class="fas fa-file-download"></i></a>
                    </td>
                  </tr>
                      @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
