@extends('admin.layout')
@section('content')
<section class="forms">
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display">Imunisasi </h1>
        </header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card bg-light">
                    <div class="card-header">Profil siswa</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2">
                                <img class="card-img-top" src="{{secure_asset('/uploads/avatars/'.$imunisasi->siswa->avatar)}}"
                                    alt="Card image">
                            </div>
                            <div class="col-lg-10 table-responsive">
                                <table class="table table-striped" style="width:100%">
                                    <tbody>
                                        <tr>
                                            <th class="pt-0 pb-0">Nama</th>
                                            <td class="pt-0 pb-0">{{$imunisasi->siswa->nama}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Tempat Lahir</th>
                                            <td class="pt-0 pb-0">{{$imunisasi->siswa->tmp_lahir}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Tanggal Lahir</th>
                                            <td class="pt-0 pb-0">
                                                {{date("d-m-Y", strtotime($imunisasi->siswa->tgl_lahir))}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Alamat</th>
                                            <td class="pt-0 pb-0">{{$imunisasi->siswa->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Nama Ayah</th>
                                            <td class="pt-0 pb-0">{{$imunisasi->siswa->ayah}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Nama Ibu</th>
                                            <td class="pt-0 pb-0">{{$imunisasi->siswa->ibu}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Nama Wali</th>
                                            <td class="pt-0 pb-0">{{$imunisasi->siswa->wali ?? "Tidak Ada"}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Jenis Kelamin </th>
                                            <td class="pt-0 pb-0">{{$imunisasi->siswa->jns_kelamin}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Golongan Darah</th>
                                            <td class="pt-0 pb-0">{{$imunisasi->siswa->gol_darah}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Asal Sekolah</th>
                                            <td class="pt-0 pb-0">{{$imunisasi->siswa->asal_sekolah}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">kelas</th>
                                            <td class="pt-0 pb-0">{{$imunisasi->siswa->kelas}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">No BPJS</th>
                                            <td class="pt-0 pb-0">{{$imunisasi->siswa->no_bpjs}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Faskes BPJS</th>
                                            <td class="pt-0 pb-0">{{$imunisasi->siswa->faskes_bpjs}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Umur</th>
                                            <td class="pt-0 pb-0">{{$umur ?? ""}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="{{route('imunisasi.index')}}" class="btn btn-primary">Kembali</a>

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
                        <h4 style="float:left">Detail Data Imunisasi</h4>
                    </div>
                    <div class="card-body">
                        <p style="color: black;font-weight: bold;">Petugas Pelaksana : {{$imunisasi->user->name}}</p>
                        <p style="color: black;font-weight: bold;">Tgl Imunisasi : {{$imunisasi->tgl_imunisasi}}</p>
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>

                                        <th>Vaksin</th>
                                        <th>Jumlah Pemberian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Hepatitis B</td>
                                        <td>{{$imunisasi->hep_b}}</td>
                                    </tr>
                                    <tr>
                                        <td>Polio</td>
                                        <td>{{$imunisasi->polio}}</td>
                                    </tr>
                                    <tr>
                                        <td>BCG</td>
                                        <td>{{$imunisasi->bcg}}</td>
                                    </tr>
                                    <tr>
                                        <td>DTP</td>
                                        <td>{{$imunisasi->dtp}}</td>
                                    </tr>
                                    <tr>
                                        <td>Hib</td>
                                        <td>{{$imunisasi->hib}}</td>
                                    </tr>
                                    <tr>
                                        <td>PCV</td>
                                        <td>{{$imunisasi->pcv}}</td>
                                    </tr>
                                    <tr>
                                        <td>Rotavirus</td>
                                        <td>{{$imunisasi->rotavirus}}</td>
                                    </tr>
                                    <tr>
                                        <td>Influenza</td>
                                        <td>{{$imunisasi->influenza}}</td>
                                    </tr>
                                    <tr>
                                        <td>Campak</td>
                                        <td>{{$imunisasi->campak}}</td>
                                    </tr>
                                    <tr>
                                        <td>MMR</td>
                                        <td>{{$imunisasi->mmr}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tifoid</td>
                                        <td>{{$imunisasi->tifoid}}</td>
                                    </tr>
                                    <tr>
                                        <td>Hepatitis A</td>
                                        <td>{{$imunisasi->hep_a}}</td>
                                    </tr>
                                    <tr>
                                        <td>Varisela</td>
                                        <td>{{$imunisasi->varisela}}</td>
                                    </tr>
                                    <tr>
                                        <td>HPV</td>
                                        <td>{{$imunisasi->hpv}}</td>
                                    </tr>
                                    <tr>
                                        <td>Japanese encephalitis</td>
                                        <td>{{$imunisasi->jap_enc}}</td>
                                    </tr>
                                    <tr>
                                        <td>Dengue</td>
                                        <td>{{$imunisasi->dengue}}</td>
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
