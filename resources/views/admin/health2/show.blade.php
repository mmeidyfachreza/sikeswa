@extends('admin.layout')
@section('content')
<section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header>
            <h1 class="h3 display">Home Care            </h1>
      </header>
          <div class="row">
              <div class="col-lg-12">
                  <div class="card bg-light">
                      <div class="card-header">Profil Anak</div>
                      <div class="card-body">
                          <div class="row" >
                              <div class="col-lg-2">
                                  <img class="card-img-top" src="{{asset('/uploads/avatars/'.$pengukuran->siswa->avatar)}}" alt="Card image">
                          </div>
                              <div class="col-lg-10 table-responsive">
                                  <table class="table table-striped" style="width:100%">
                                      <tbody>
                                          <tr>
                                              <th class="pt-0 pb-0">Nama</th>
                                              <td class="pt-0 pb-0">{{$pengukuran->siswa->nama}}</td>
                                      </tr>
                                          <tr>
                                              <th class="pt-0 pb-0">Tempat Lahir</th>
                                              <td class="pt-0 pb-0">{{$pengukuran->siswa->tmp_lahir}}</td>
                                      </tr>
                                          <tr>
                                              <th class="pt-0 pb-0">Tanggal Lahir</th>
                                              <td class="pt-0 pb-0">{{date("d-m-Y", strtotime($pengukuran->siswa->tgl_lahir))}}</td>
                                      </tr>
                                          <tr>
                                              <th class="pt-0 pb-0">Alamat</th>
                                              <td class="pt-0 pb-0">{{$pengukuran->siswa->alamat}}</td>
                                      </tr>
                                          <tr>
                                              <th class="pt-0 pb-0">Nama Ayah</th>
                                              <td class="pt-0 pb-0">{{$pengukuran->siswa->ayah}}</td>
                                      </tr>
                                          <tr>
                                              <th class="pt-0 pb-0">Nama Ibu</th>
                                              <td class="pt-0 pb-0">{{$pengukuran->siswa->ibu}}</td>
                                      </tr>
                                          <tr>
                                              <th class="pt-0 pb-0">Nama Wali</th>
                                              <td class="pt-0 pb-0">{{$pengukuran->siswa->wali ?? "Tidak Ada"}}</td>
                                      </tr>
                                          <tr>
                                              <th class="pt-0 pb-0">Jenis Kelamin </th>
                                              <td class="pt-0 pb-0">{{$pengukuran->siswa->jns_kelamin}}</td>
                                      </tr>
                                          <tr>
                                              <th class="pt-0 pb-0">Golongan Darah</th>
                                              <td class="pt-0 pb-0">{{$pengukuran->siswa->gol_darah}}</td>
                                      </tr>
                                          <tr>
                                              <th class="pt-0 pb-0">Asal Sekolah</th>
                                              <td class="pt-0 pb-0">{{$pengukuran->siswa->asal_sekolah}}</td>
                                      </tr>
                                          <tr>
                                              <th class="pt-0 pb-0">kelas</th>
                                              <td class="pt-0 pb-0">{{$pengukuran->siswa->kelas}}</td>
                                      </tr>
                                          <tr>
                                              <th class="pt-0 pb-0">No BPJS</th>
                                              <td class="pt-0 pb-0">{{$pengukuran->siswa->no_bpjs}}</td>
                                      </tr>
                                          <tr>
                                              <th class="pt-0 pb-0">Faskes BPJS</th>
                                              <td class="pt-0 pb-0">{{$pengukuran->siswa->faskes_bpjs}}</td>
                                      </tr>
                                          <tr>
                                            <th class="pt-0 pb-0">Umur</th>
                                            <td class="pt-0 pb-0">{{$umur ?? ""}}</td>
                                      </tr>
                                  </tbody>
                              </table>
                                  <a href="{{route('kesehatan.index')}}" class="btn btn-primary">Kembali</a>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
          @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
            </div>
          @endif
          <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                      <h4 style="float:left">Detail Data Home Care</h4>
                </div>
                    <div class="card-body" >
                      <p style="color: black;font-weight: bold;">Petugas Pelaksana : {{$pengukuran->user->name}}</p>
                      <div class="table-responsive">
                        <table class="table table-striped table-sm" style="width:115%">
                          <thead>
                            <tr>
                              <th class="text-center">#</th>
                              <th class="text-center">Tanggal Pengukuran</th>
                              <th class="text-center">Umur (total bulan)</th>
                              <th class="text-center">Tinggi Badan</th>
                              <th class="text-center">Berat Badan</th>
                              <th class="text-center">IMT</th>
                              {{-- <th class="text-center">TB/Umur</th> --}}
                              <th class="text-center">TB/U</th>
                              {{-- <th class="text-center">BB/Umur</th> --}}
                              <th class="text-center">BB/U</th>
                              {{-- <th class="text-center">BMI/Umur</th> --}}
                              <th class="text-center">IMT/U</th>
                              <th class="text-center">Kuku</th>
                              <th class="text-center">Gigi</th>
                              <th class="text-center">Rambut</th>
                              <th class="text-center">Kulit</th>
                              <th class="text-center">Telinga</th>
                        </tr>
                      </thead>
                          <tbody>
                            <?php $x=1;?>
                                <tr>
                                    <th scope="row">{{$x++}}</th>
                                    <td class="text-center">{{date("d-m-Y", strtotime($pengukuran->tgl_pengukuran))}}</td>
                                    <td class="text-center">{{$pengukuran->umur}}</td>
                                    <td class="text-center">{{$pengukuran->tinggi_b}}</td>
                                    <td class="text-center">{{$pengukuran->berat_b}}</td>
                                    <td class="text-center">{{$pengukuran->bmi}}</td>
                                    {{-- <td class="text-center">{{$pengukuran->nilai_tb}}</td> --}}
                                    <td class="text-center">{{$pengukuran->keterangan_tb}}</td>
                                    {{-- <td class="text-center">{{$pengukuran->nilai_bb}}</td> --}}
                                    <td class="text-center">{{$pengukuran->keterangan_bb}}</td>
                                    {{-- <td class="text-center">{{$pengukuran->nilai_bmi}}</td> --}}
                                    <td class="text-center">{{$pengukuran->keterangan_bmi}}</td>
                                    <td class="text-center">{{$pengukuran->kesimpulan_kuku}}</td>
                                    <td class="text-center">{{$pengukuran->kesimpulan_gigi}}</td>
                                    <td class="text-center">{{$pengukuran->kesimpulan_rambut}}</td>
                                    <td class="text-center">{{$pengukuran->kesimpulan_kulit}}</td>
                                    <td class="text-center">{{$pengukuran->kesimpulan_telinga}}</td>
                            </tr>
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
