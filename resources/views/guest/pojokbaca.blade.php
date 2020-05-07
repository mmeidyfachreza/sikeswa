@extends('guest.layout')
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
                <h4 >Daftar Buku</h4>

          </div>
              <div class="card-body" >
                <div class="table-responsive">
                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tahun</th>

                        <th>Kategori</th>

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

                        <td>{{ $data->katmodul->nama }}</td>

                        <td>
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
