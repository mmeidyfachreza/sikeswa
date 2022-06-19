@extends('admin.layout')
@section('content')
<section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header>
            <h1 class="h3 display">Anak            </h1>
      </header>
          <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
            </div>
            @endif
            <div class="col-lg-12">
                    <div class="card bg-light">
                            <div class="card-header">Profil Anak</div>
                                <div class="card-body">
                                    <div class="row" >
                                        <div class="col-lg-2">
                                                <img class="card-img-top" src="{{asset('/uploads/avatars/'.$siswa->avatar)}}" alt="Card image">
                                    </div>

                                        <div class="col-lg-7">
                                            <table class="table table-striped" style="width:100%">
                                                <tbody>
                                                <tr>
                                                    <th>
                                                        Nama<br>
                                                        Tempat Lahir<br>
                                                        Tanggal Lahir<br>
                                                        Alamat<br>
                                                        Jenis Kelamin <br>
                                                        Golongan Darah<br>
                                                        Asal Sekolah<br>
                                                        kelas<br>
                                                        No BPJS<br>
                                                </th>
                                                    <td></td>
                                                    <td>
                                                        {{$siswa->nama}}<br>
                                                        {{$siswa->tmp_lahir}}<br>
                                                        {{date("d-m-Y", strtotime($siswa->tgl_lahir))}}<br>
                                                        {{$siswa->alamat}}<br>
                                                        {{$siswa->jns_kelamin}}<br>
                                                        {{$siswa->gol_darah}}<br>
                                                        {{$siswa->asal_sekolah}}<br>
                                                        {{$siswa->kelas}}<br>
                                                        {{$siswa->no_bpjs}}<br>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                            <a href="{{route('siswa.index')}}" class="btn btn-primary">Kembali</a>
                                    </div>
                                </div>
                            </div>
                    </div>

        </div>
      </div>
    </div>
  </section>
@endsection
