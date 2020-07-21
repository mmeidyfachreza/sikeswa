@extends('layouts.layout')

@section('content')
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Kartu Kontrol </li>
        </ul>
    </div>
</div>
<section>
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display"></h1>
        </header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 style="float:left">Kartu Kontrol Tahun {{$tahun}}</h4>
                    </div>
                    <div class="card-body">
                        <p style="color: black;font-weight: bold;">Nama : {{$siswa->name}} </p>
                        <p style="color: black;font-weight: bold;">Kelas : {{$siswa->classroom->name}}</p>
                        <p style="color: black;font-weight: bold;">Sekolah : {{$siswa->school_from}}</p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm karkon">
                                <thead>
                                    <tr>
                                        <th class="align-middle" rowspan="2">NO</th>
                                        <th class="align-middle" rowspan="2">BULAN</th>
                                        <th class="align-middle" rowspan="2">TANGGAL</th>
                                        <th class="align-middle" colspan="7">JENIS PEMERIKSAAN</th>
                                        <th class="align-middle" rowspan="2">PARAF</th>
                                    </tr>
                                    <tr>
                                        <th>BB</th>
                                        <th>TB</th>
                                        <th>KUKU</th>
                                        <th>TELINGA</th>
                                        <th>GIGI</th>
                                        <th>RAMBUT</th>
                                        <th>KULIT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $x=1 
                                    ?>
                                    @foreach ($month as $item)
                                    <tr>
                                        <td class="text-center">{{$x}}</td>
                                        <td>{{$item}}</td>
                                        <td class="text-center">
                                            @isset($bulan[$x])
                                                {{$bulan[$x][0]->date}}
                                            @endisset
                                        </td>
                                        <td class="text-center">
                                            @isset($bulan[$x])
                                                {{$bulan[$x][0]->weight}}
                                            @endisset
                                        </td>
                                        <td class="text-center">
                                            @isset($bulan[$x])
                                                {{$bulan[$x][0]->height}}
                                            @endisset
                                        </td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td></td>
                                    </tr>        
                                    <?php 
                                        $x+=1
                                    ?>
                                    @endforeach
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Januari</td>
                                        <td class="text-center">@if (isset($bulan[1]))
                                            {{$bulan[1][0]["date"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[1])) {{$bulan[1][0]["berat_b"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[1]))
                                            {{$bulan[1][0]["tinggi_b"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[1])) {{$bulan[1][0]["k_kuku"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[1]))
                                            {{$bulan[1][0]["k_telinga"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[1])) {{$bulan[1][0]["k_gigi"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[1]))
                                            {{$bulan[1][0]["k_rambut"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[1])) {{$bulan[1][0]["k_kulit"]}}@endif
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Februari</td>
                                        <td class="text-center">@if (isset($bulan[2]))
                                            {{$bulan[2][0]["date"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[2])) {{$bulan[2][0]["berat_b"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[2]))
                                            {{$bulan[2][0]["tinggi_b"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[2])) {{$bulan[2][0]["k_kuku"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[2]))
                                            {{$bulan[2][0]["k_telinga"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[2])) {{$bulan[2][0]["k_gigi"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[2]))
                                            {{$bulan[2][0]["k_rambut"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[2])) {{$bulan[2][0]["k_kulit"]}}@endif
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>Maret</td>
                                        <td class="text-center">@if (isset($bulan[3]))
                                            {{$bulan[3][0]["date"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[3])) {{$bulan[3][0]["berat_b"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[3]))
                                            {{$bulan[3][0]["tinggi_b"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[3])) {{$bulan[3][0]["k_kuku"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[3]))
                                            {{$bulan[3][0]["k_telinga"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[3])) {{$bulan[3][0]["k_gigi"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[3]))
                                            {{$bulan[3][0]["k_rambut"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[3])) {{$bulan[3][0]["k_kulit"]}}@endif
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td>April</td>
                                        <td class="text-center">@if (isset($bulan[4]))
                                            {{$bulan[4][0]["date"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[4])) {{$bulan[4][0]["berat_b"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[4]))
                                            {{$bulan[4][0]["tinggi_b"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[4])) {{$bulan[4][0]["k_kuku"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[4]))
                                            {{$bulan[4][0]["k_telinga"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[4])) {{$bulan[4][0]["k_gigi"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[4]))
                                            {{$bulan[4][0]["k_rambut"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[4])) {{$bulan[4][0]["k_kulit"]}}@endif
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td>Mei</td>
                                        <td class="text-center">@if (isset($bulan[5]))
                                            {{$bulan[5][0]["date"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[5])) {{$bulan[5][0]["berat_b"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[5]))
                                            {{$bulan[5][0]["tinggi_b"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[5])) {{$bulan[5][0]["k_kuku"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[5]))
                                            {{$bulan[5][0]["k_telinga"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[5])) {{$bulan[5][0]["k_gigi"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[5]))
                                            {{$bulan[5][0]["k_rambut"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[5])) {{$bulan[5][0]["k_kulit"]}}@endif
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td>Juni</td>
                                        <td class="text-center">@if (isset($bulan[6]))
                                            {{$bulan[6][0]["date"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[6])) {{$bulan[6][0]["berat_b"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[6]))
                                            {{$bulan[6][0]["tinggi_b"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[6])) {{$bulan[6][0]["k_kuku"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[6]))
                                            {{$bulan[6][0]["k_telinga"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[6])) {{$bulan[6][0]["k_gigi"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[6]))
                                            {{$bulan[6][0]["k_rambut"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[6])) {{$bulan[6][0]["k_kulit"]}}@endif
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td>Juli</td>
                                        <td class="text-center">@if (isset($bulan[7]))
                                            {{$bulan[7][0]["date"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[7])) {{$bulan[7][0]["berat_b"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[7]))
                                            {{$bulan[7][0]["tinggi_b"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[7])) {{$bulan[7][0]["k_kuku"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[7]))
                                            {{$bulan[7][0]["k_telinga"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[7])) {{$bulan[7][0]["k_gigi"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[7]))
                                            {{$bulan[7][0]["k_rambut"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[7])) {{$bulan[7][0]["k_kulit"]}}@endif
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">8</td>
                                        <td>Agustus</td>
                                        <td class="text-center">@if (isset($bulan[8]))
                                            {{$bulan[8][0]["date"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[8])) {{$bulan[8][0]["berat_b"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[8]))
                                            {{$bulan[8][0]["tinggi_b"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[8])) {{$bulan[8][0]["k_kuku"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[8]))
                                            {{$bulan[8][0]["k_telinga"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[8])) {{$bulan[8][0]["k_gigi"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[8]))
                                            {{$bulan[8][0]["k_rambut"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[8])) {{$bulan[8][0]["k_kulit"]}}@endif
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">9</td>
                                        <td>September</td>
                                        <td class="text-center">@if (isset($bulan[9]))
                                            {{$bulan[9][0]["date"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[9])) {{$bulan[9][0]["berat_b"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[9]))
                                            {{$bulan[9][0]["tinggi_b"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[9])) {{$bulan[9][0]["k_kuku"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[9]))
                                            {{$bulan[9][0]["k_telinga"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[9])) {{$bulan[9][0]["k_gigi"]}}@endif
                                        </td>
                                        <td class="text-center">@if (isset($bulan[9]))
                                            {{$bulan[9][0]["k_rambut"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[9])) {{$bulan[9][0]["k_kulit"]}}@endif
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">10</td>
                                        <td>Oktober</td>
                                        <td class="text-center">@if (isset($bulan[10]))
                                            {{$bulan[10][0]["date"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[10]))
                                            {{$bulan[10][0]["berat_b"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[10]))
                                            {{$bulan[10][0]["tinggi_b"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[10]))
                                            {{$bulan[10][0]["k_kuku"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[10]))
                                            {{$bulan[10][0]["k_telinga"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[10]))
                                            {{$bulan[10][0]["k_gigi"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[10]))
                                            {{$bulan[10][0]["k_rambut"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[10]))
                                            {{$bulan[10][0]["k_kulit"]}}@endif</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">11</td>
                                        <td>November</td>
                                        <td id="tgl11"></td>
                                        <td class="text-center">@if (isset($bulan[11]))
                                            {{$bulan[11][0]["date"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[11]))
                                            {{$bulan[11][0]["berat_b"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[11]))
                                            {{$bulan[11][0]["tinggi_b"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[11]))
                                            {{$bulan[11][0]["k_kuku"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[11]))
                                            {{$bulan[11][0]["k_telinga"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[11]))
                                            {{$bulan[11][0]["k_gigi"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[11]))
                                            {{$bulan[11][0]["k_rambut"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[11]))
                                            {{$bulan[11][0]["k_kulit"]}}@endif</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">12</td>
                                        <td>Desember</td>
                                        <td id="tgl12"></td>
                                        <td class="text-center">@if (isset($bulan[12]))
                                            {{$bulan[12][0]["date"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[12]))
                                            {{$bulan[12][0]["berat_b"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[12]))
                                            {{$bulan[12][0]["tinggi_b"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[12]))
                                            {{$bulan[12][0]["k_kuku"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[12]))
                                            {{$bulan[12][0]["k_telinga"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[12]))
                                            {{$bulan[12][0]["k_gigi"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[12]))
                                            {{$bulan[12][0]["k_rambut"]}}@endif</td>
                                        <td class="text-center">@if (isset($bulan[12]))
                                            {{$bulan[12][0]["k_kulit"]}}@endif</td>
                                        <td></td>
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
