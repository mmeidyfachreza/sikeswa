@extends('admin.layout')
@section('content')
<section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header>
            <h1 class="h3 display">Kategori Buku            </h1>
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
                  <h4>Ubah Anak</h4>
            </div>
                <div class="card-body">
                  <p>Silahkan Tambahkan data Anak</p>
                  <form action="{{ route('katmodul.update',$katmodul->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <div class="form-group">
                          <label for="InputNama">Nama Kategori</label>
                          <input type="text" class="form-control" name="nama" aria-describedby="help nama" placeholder="masukan nama" required value="{{$katmodul->nama}}">
                  </div>
                      <div class="form-group">
                          <label for="InputTahun">Deskripsi</label>
                          <textarea name="deskripsi" id="" cols="30" rows="2" class="form-control" placeholder="masukan keterangan" required>{{$katmodul->deskripsi}}</textarea>

                  </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{URL::previous()}}" class="btn btn-danger">Batal</a>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
