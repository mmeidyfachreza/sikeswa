@extends('admin.layout')
@section('content')
<section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header>
            <h1 class="h3 display">Siswa            </h1>
      </header>
          <div class="row">
              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
              </ul>
          </div>
              @endif
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Tambah Kategori Buku</h4>
            </div>
                <div class="card-body">
                  <p>Silahkan Tambahkan data Kategori Buku</p>
                  <form enctype="multipart/form-data" action="{{route('katmodul.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="InputNama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="help nama" required placeholder="masukan nama" value="{{ old('nama') }}">
                    </div>
                        <div class="form-group">
                            <label for="Inputdeskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="" cols="30" rows="2" class="form-control"  placeholder="masukan deskripsi">{{ old('deskripsi') }}</textarea>

                    </div>
                        <br>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                      <a href="{{route('katmodul.index')}}" class="btn btn-danger">Batal</a>
                </div>

              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
