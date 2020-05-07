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
                <h4>Ubah Siswa</h4>
          </div>
              <div class="card-body">
                <p>Silahkan Tambahkan data siswa</p>
                <form action="{{ route('modul.update',$modul->uuid) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="form-group col-md-6">
                    <div class="form-group">
                      <label for="InputNama">Nama File</label>
                      <input type="text" class="form-control" id="nama" name="nama" aria-describedby="help nama" required placeholder="masukan nama" value="{{$modul->nama}}">
                </div>
                    <div class="form-group">
                      <label for="InputTahun">Tahun</label>
                      <input type="text" class="form-control" id="tahun" name="tahun" aria-describedby="help tahun" required placeholder="masukan tahun" value="{{$modul->tahun}}">
                </div>
                    <div class="form-group">
                      <label >Kategori Dokumen</label>
                      <select name="kategori_id" class="custom-select">
                        {{-- <option selected>Pilih</option> --}}
                        @foreach ($katmodul as $item)
                        <option @if ($item->id==$modul->katmodul_id)
                          selected
                          @endif value="{{$item->id}}">{{$item->nama}}</option>
                          @endforeach
                    </select>
                  </div>
                      <div class="form-group">
                        <label for="InputTahun">Publikasi : ya </label>
                        <input type="checkbox" name="publikasi" id="publikasi" @if ($modul->publikasi=="ya") checked @else  @endif value="ya">
                  </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">File saat ini : {{$modul->namafile}}</label>
                  </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Pilih FIle Baru</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="excel">
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
