@extends('admin.layout')
@section('content')
<section class="forms">
        <div class="container-fluid">

          <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                      <h4 style="float:left">Data Kesehatan</h4>
                      <div style="float:right">
                          @if (isset($siswa))
                          <a href="{{route('kesehatan.add',$siswa->id)}}" class="btn btn-primary btn-sm">Tambah</a>
                          @else

                          @endif

                  </div>
                </div>

                    <div class="card-body" >
                      <div class="table-responsive">
                            <table class="table table-bordered   ">
                                  <tr>
                                    <td></td>
                                    <td colspan="2">Berat Badan</td>
                                    <td colspan="2">Tinggi Badan</td>
                                    <td colspan="2">IMT</td>
                                    <td colspan="2">Kuku</td>
                                    <td colspan="2">Telinga</td>
                                    <td colspan="2">Kulit</td>
                                    <td colspan="2">Rambut</td>
                              </tr>
                                    <tr>
                                      <td class="align-middle" rowspan="7">Keterangan</td>
                                </tr>
                                    <tr>
                                      <td>Gizi Buruk</td>
                                      <td>{{$total1}}</td>
                                      <td>Sangat Pendek</td>
                                      <td>{{$total5}}</td>
                                      <td>Sangat Kurus</td>
                                      <td>{{$total9}}</td>
                                      <td>Tidak Sehat</td>
                                      <td>{{$total14}}</td>
                                      <td>Tidak Sehat</td>
                                      <td>{{$total16}}</td>
                                      <td>Tidak Sehat</td>
                                      <td>{{$total18}}</td>
                                      <td>Tidak Sehat</td>
                                      <td>{{$total20}}</td>
                                </tr>
                                    <tr>

                                      <td>Gizi Kurang</td>
                                      <td>{{$total2}}</td>
                                      <td>Pendek</td>
                                      <td>{{$total6}}</td>
                                      <td>Kurus</td>
                                      <td>{{$total10}}</td>
                                      <td>Sehat</td>
                                      <td>{{$total15}}</td>
                                      <td>Sehat</td>
                                      <td>{{$total17}}</td>
                                      <td>Sehat</td>
                                      <td>{{$total19}}</td>
                                      <td>Sehat</td>
                                      <td>{{$total21}}</td>
                                </tr>
                                    <tr>

                                      <td>Gizi Baik</td>
                                      <td>{{$total3}}</td>
                                      <td>Normal</td>
                                      <td>{{$total7}}</td>
                                      <td>Normal</td>
                                      <td>{{$total11}}</td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                </tr>
                                    <tr>
                                      <td>Gizi Lebih</td>
                                      <td>{{$total4}}</td>
                                      <td>Tinggi</td>
                                      <td>{{$total8}}</td>
                                      <td>Gemuk</td>
                                      <td>{{$total12}}</td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                </tr>
                                    <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td>Obesitas</td>
                                      <td>{{$total13}}</td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                </tr>
                                    <tr>
                                      <td>Jumlah</td>
                                      <td>{{$totalbb}}</td>
                                      <td>Jumlah</td>
                                      <td>{{$totaltb}}</td>
                                      <td>Jumlah</td>
                                      <td>{{$totalimt}}</td>
                                      <td>Jumlah</td>
                                      <td>{{$totalkuku}}</td>
                                      <td>Jumlah</td>
                                      <td>{{$totaltelinga}}</td>
                                      <td>Jumlah</td>
                                      <td>{{$totalkulit}}</td>
                                      <td>Jumlah</td>
                                      <td>{{$totalrambut}}</td>
                                </tr>
                                    <tr>
                                    <td colspan="3">Laki - Laki</td>
                                    <td colspan="2">{{$totall}}</td>
                                    <td colspan="3">Perempuan</td>
                                    <td colspan="2">{{$totalp}}</td>
                                    <td colspan="3">Total Siswa</td>
                                    <td colspan="2">{{$totaljk}}</td>
                                </tr>
                              </table>
                  </div>
                </div>
            </div>
        </div>
      </div>

    </div>
  </section>
@endsection
