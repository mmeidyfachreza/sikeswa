@extends('admin.layout')
@section('content')
<section class="forms">
        <div class="container-fluid">
            <!-- Page Header-->
            <header>
                <h1 class="h3 display">Rekam Medik            </h1>
        </header>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-light">
                        <div class="card-header">Profil Anak</div>
                        <div class="card-body">
                            <div class="row" >
                                <div class="col-lg-2">
                                    <img class="card-img-top" src="{{asset('/uploads/avatars/'.$rekammedik->siswa->avatar)}}" alt="Card image">
                            </div>
                                <div class="col-lg-10 table-responsive">
                                    <table class="table table-striped" style="width:100%">
                                        <tbody>
                                            <tr>
                                                <th class="pt-0 pb-0">Nama</th>
                                                <td class="pt-0 pb-0">{{$rekammedik->siswa->nama}}</td>
                                        </tr>
                                            <tr>
                                                <th class="pt-0 pb-0">Tempat Lahir</th>
                                                <td class="pt-0 pb-0">{{$rekammedik->siswa->tmp_lahir}}</td>
                                        </tr>
                                            <tr>
                                                <th class="pt-0 pb-0">Tanggal Lahir</th>
                                                <td class="pt-0 pb-0">{{date("d-m-Y", strtotime($rekammedik->siswa->tgl_lahir))}}</td>
                                        </tr>
                                            <tr>
                                                <th class="pt-0 pb-0">Alamat</th>
                                                <td class="pt-0 pb-0">{{$rekammedik->siswa->alamat}}</td>
                                        </tr>
                                            <tr>
                                                <th class="pt-0 pb-0">Nama Ayah</th>
                                                <td class="pt-0 pb-0">{{$rekammedik->siswa->ayah}}</td>
                                        </tr>
                                            <tr>
                                                <th class="pt-0 pb-0">Nama Ibu</th>
                                                <td class="pt-0 pb-0">{{$rekammedik->siswa->ibu}}</td>
                                        </tr>
                                            <tr>
                                                <th class="pt-0 pb-0">Nama Wali</th>
                                                <td class="pt-0 pb-0">{{$rekammedik->siswa->wali ?? "Tidak Ada"}}</td>
                                        </tr>
                                            <tr>
                                                <th class="pt-0 pb-0">Jenis Kelamin </th>
                                                <td class="pt-0 pb-0">{{$rekammedik->siswa->jns_kelamin}}</td>
                                        </tr>
                                            <tr>
                                                <th class="pt-0 pb-0">Golongan Darah</th>
                                                <td class="pt-0 pb-0">{{$rekammedik->siswa->gol_darah}}</td>
                                        </tr>
                                            <tr>
                                                <th class="pt-0 pb-0">Asal Sekolah</th>
                                                <td class="pt-0 pb-0">{{$rekammedik->siswa->asal_sekolah}}</td>
                                        </tr>
                                            <tr>
                                                <th class="pt-0 pb-0">kelas</th>
                                                <td class="pt-0 pb-0">{{$rekammedik->siswa->kelas}}</td>
                                        </tr>
                                            <tr>
                                                <th class="pt-0 pb-0">No BPJS</th>
                                                <td class="pt-0 pb-0">{{$rekammedik->siswa->no_bpjs}}</td>
                                        </tr>
                                            <tr>
                                                <th class="pt-0 pb-0">Faskes BPJS</th>
                                                <td class="pt-0 pb-0">{{$rekammedik->siswa->faskes_bpjs}}</td>
                                        </tr>
                                            <tr>
                                                <th class="pt-0 pb-0">Umur</th>
                                                <td class="pt-0 pb-0">{{$umur ?? ""}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                    <a href="{{route('rekammedik.index')}}" class="btn btn-primary">Kembali</a>

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
                            <h4 style="float:left">Detail Data Rekam Medik</h4>
                        </div>

                        <div class="card-body" >
                            <p style="color: black;font-weight: bold;">Petugas Pelaksana : {{$rekammedik->user->name}}</p>
                            <p style="color: black;font-weight: bold;">Tgl Pemeriksaan : {{$rekammedik->tgl_pemeriksaan}}</p>
                            <div class="rekammedik">
                                <p class="judul">A.	Riwayat Kesehatan Anak</p>
                                <p>Alergi makanan tertentu : <span>{{$rekammedik->alergi_makan}}</span></p>
                                <p>sebutkan : <span>{{$rekammedik->ket_alergi_makan}}</span></p>
                                <p>Alergi obat tertentu : <span>{{$rekammedik->alergi_obat}}</span></p>
                                <p>sebutkan : <span>{{$rekammedik->ket_alergi_obat}}</span></p>
                                <p>Pernah mengalami cedera serius akibat kecelakaan (geger otak/patah tulang/lainnya) : <span>{{$rekammedik->cedera_serius}}</span></p>
                                <p>sebutkan : <span>{{$rekammedik->ket_cedera_serius}}</span></p>
                                <p>Riwayat kejang berulang : <span>{{$rekammedik->kejang}}</span></p>
                                <p>Riwayat Pingsan  : <span>{{$rekammedik->pingsan}}</span></p>
                                <p>Riwayat transfusi darah berulang : <span>{{$rekammedik->transfusi_darah}}</span></p>
                                <p>Riwayat kelainan bawaan yang dimiliki : <span>{{$rekammedik->kelainan}}</span></p>
                                <p>sebutkan : <span>{{$rekammedik->ket_kelainan}}</span></p>
                                <p>Riwayat penyakit lainnya : <span>{{$rekammedik->lainnya}}</span></p>
                                <p>sebutkan : <span>{{$rekammedik->ket_lainnya}}</span></p>

                                <p class="judul">B.	Riwayat Imunisasi (Khusus Peserta didik SD/MI)</p>
                                <p>Memiliki catatan imunisasi  : <span>{{$rekammedik->imunisasi}}</span></p>
                                <p>Saat bayi mendapat imunisasi  : <span>{{$rekammedik->imunisasi_bayi}}</span></p>
                                <p>Pada SD kelas 1 mendapat imunisasi  : <span>{{$rekammedik->imun_sd_1}}</span></p>
                                <p>Pada SD kelas 2 mendapat imunisasi  : <span>{{$rekammedik->imun_sd_2}}</span></p>
                                <p>Pada SD kelas 3 mendapat imunisasi  : <span>{{$rekammedik->imun_sd_3}}</span></p>
                                <p class="judul">C.	Riwayat Kesehatan Keluarga</p>
                                <p>Tuberkolosis (TBC) Diabetes : <span>{{$rekammedik->tbc}}</span></p>
                                <p>Diabetes Melitus : <span>{{$rekammedik->dm}}</span></p>
                                <p>Hepatitis/Sakit Kuning : <span>{{$rekammedik->hepatitis}}</span></p>
                                <p>Asma/Bengek : <span>{{$rekammedik->asma}}</span></p>
                                <p>Penyakit jantung : <span>{{$rekammedik->jantung}}</span></p>
                                <p>Stroke/lumpuh : <span>{{$rekammedik->stroke}}</span></p>
                                <p>Obesitas/gemuk sekali : <span>{{$rekammedik->obesitas}}</span></p>
                                <p>Tekanan darah tinggi : <span>{{$rekammedik->tdt}}</span></p>
                                <p>Kanker/tumor ganas : <span>{{$rekammedik->kanker}}</span></p>
                                <p>Anamemia : <span>{{$rekammedik->anamemia}}</span></p>
                                <p>Thalasemia : <span>{{$rekammedik->thalasemia}}</span></p>
                                <p>Hemofilia : <span>{{$rekammedik->hemofilia}}</span></p>
                                <p class="judul">D.	Gaya Hidup</p>
                                <p>Sarapan  : <span>{{$rekammedik->sarapan}}</span></p>
                                <p>Jajam : <span>{{$rekammedik->jajan}}</span></p>
                                <p>Resiko merokok : <span>{{$rekammedik->res_merokok}}</span></p>
                                <p>Resiko minum minuman beralkohol : <span>{{$rekammedik->res_alkohol}}</span></p>
                                <p class="judul">E.	Kesehatan Reproduksi (Untuk Peserta didik mulai dari kelas 4 SD)</p>
                                <p class="sub">Peserta Didik Perempuan</p>
                                <p>Gangguan pubertas : <span>{{$rekammedik->pubertas}}</span></p>
                                <p>Gangguan menstruasi : <span>{{$rekammedik->menstruasi}}</span></p>
                                <p>Resiko IMS : <span>{{$rekammedik->ims_p}}</span></p>
                                <p class="sub">Peserta Didik Laki-laki</p>
                                <p>Resiko IMS : <span>{{$rekammedik->ims_l}}</span></p>
                                <p class="judul">F.	Kesehatan Mental Emosional</p>
                                <p class="sub">Skor Kesulitan</p>
                                <p>Gejala emosional : <span>{{$rekammedik->gej_emosi}}</span></p>
                                <p>Masalah perilaku  : <span>{{$rekammedik->mas_perilaku}}</span></p>
                                <p>Hiperaktifitas : <span>{{$rekammedik->hiperaktifitas}}</span></p>
                                <p>Masalah teman sebaya : <span>{{$rekammedik->mas_tmnsbya}}</span></p>
                                <p class="sub">Skor Kekuatan</p>
                                <p>Perilaku prososial : <span>{{$rekammedik->per_prososial}}</span></p>
                                <p class="judul">G.	Kesehatan Intelegensia</p>
                                <p>Silahkan Download Untuk Melihat</p>

                                @if ($rekammedik->uuid)
                                <a class="btn btn-primary" href="{{ route('rekammedik.download', $rekammedik->uuid) }}"><i class="fas fa-file-download"></i></a>
                                @else
                                <p>Tidak Ada File Di Upload</p>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
