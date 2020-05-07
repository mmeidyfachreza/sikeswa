@extends('admin.layout')
@section('content')
<section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header>
            <h1 class="h3 display">Kategori Buku            </h1>
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
                      <h4 style="float:left">Daftar Kategori Buku</h4>
                      <div style="float:right">
                          <a href="{{route('katmodul.create')}}" class="btn btn-primary btn-sm">Tambah</a>
                  </div>
                </div>

                    <div class="card-body" >
                      <div class="table-responsive">
                        <table class="table table-striped table-sm">
                          <thead>
                            <tr>
                              <th>#</th>

                              <th>Nama</th>
                              <th>Deskripsi</th>
                              <th>Aksi</th>
                        </tr>
                      </thead>
                          <tbody>
                              <?php $x=1?>
                              @foreach ($katmoduls as $data)
                                  <tr>
                                      <th scope="row">{{ $x++ }}</th>
                                      <td>{{$data->nama}}</td>
                                      <td>{{$data->deskripsi}}</td>

                                      <td>
                                        <a class="btn btn-danger" href="{{ route('katmodul.hapus', $data->id) }}"><i class="fa fa-trash-alt"></i></a>
                                        <a class="btn btn-warning" href="{{ route('katmodul.edit', $data->id) }}"><i class="fa fa-edit"></i></a>
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
