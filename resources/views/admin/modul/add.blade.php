@extends('admin.layout')
@section('content')
<section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header>
            <h1 class="h3 display">Modul            </h1>
      </header>
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
              </ul>
          </div>
              @endif
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Tambah Modul</h4>
            </div>
                <div class="card-body">
                  <p>Silahkan Tambahkan data Modul</p>
                  <form action="{{ route('modul.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="InputNama">Nama File</label>
                        <input type="text" class="form-control" id="nama" name="nama" aria-describedby="help nama" required placeholder="masukan nama" value="{{old('nama')}}">
                </div>
                    <div class="form-group">
                        <label for="InputTahun">Tahun</label>
                        <input type="text" class="form-control" id="tahun" name="tahun" aria-describedby="help tahun" required placeholder="masukan tahun" value="{{old('tahun')}}">
                </div>
                    <div class="form-group">
                            <label >Kategori Dokumen</label>
                            @if (!$katmodul->count()==0)
                            <select name="kategori_id" class="custom-select">
                                <option selected>Pilih</option>
                                @foreach ($katmodul as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                        </select>
                            @else
                            <select name="kategori_id" class="custom-select" disabled>
                                <option selected>Kategori masih kosong</option>
                        </select>
                            @endif

                </div>
                    <div class="form-group">
                        <label for="InputTahun">Publikasi : ya </label>
                        <input type="checkbox" name="publikasi" id="publikasi" value="ya">
                </div>
                    <div class="form-group">
                            <label for="exampleFormControlFile1">Pilih FIle</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" required name="excel" >
                </div>
                    <br>
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
