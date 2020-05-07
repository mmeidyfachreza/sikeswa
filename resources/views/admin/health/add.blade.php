    @extends('admin.layout')
        @section('content')
        <section class="forms">
              <div class="container-fluid">
                <!-- Page Header-->
                <header>
                  <h1 class="h3 display">Kesehatan            </h1>
            </header>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card bg-light">
                      <div class="card-header">Profil siswa</div>
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
                                    Jenis Kelamin<br>
                                    Umur
                              </th>
                                  <td></td>
                                  <td>
                                    {{$siswa->nama}}<br>
                                    {{$siswa->tmp_lahir}}<br>
                                    {{date("d-m-Y", strtotime($siswa->tgl_lahir))}}<br>
                                    {{$siswa->jns_kelamin}}<br>
                                    {{$umur ?? ""}}
                              </td>
                            </tr>
                          </tbody>
                        </table>

                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
              </ul>
            </div>
                @endif
                <div class="container-fluid row">
                  <div class="col-lg-12">
                    <button type="button" style="width:100%" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                      Tabel Antropometri Anak
                    </button>
              </div>


                  <!-- The Modal -->

            </div>
                <br>
                <div class="row">

                  <div class="col-lg-3">
                    <div class="card">
                      <div class="card-header d-flex align-items-center">
                        <h4>Tambah Data Kesehatan</h4>
                  </div>
                      <div class="card-body">
                        <p>Setiap Merubah isi pada form ini wajib melakukan Proses sebelum disimpan</p>
                        <form action="{{route('kesehatan.proses',$siswa->id)}}" method="POST">
                          @csrf


                          @if (isset($awal))
                          <div class="form-group">
                            <label>Tanggal Pengukuran (mm/dd/yyyy)</label>
                            <input id="tgl_pengukuran" type="date" name="tgl_pengukuran" placeholder="Masukan Nama Lengkap" class="form-control" value="{{$awal->tgl_pengukuran}}" required>
                      </div>
                          <div class="form-group">
                            <label>Kebersihan Kuku</label>
                            <select name="k_kuku" class="custom-select">
                              @if ($awal->k_kuku=="Panjang")
                              <option selected value="Panjang">Panjang</option>
                              <option value="Pendek">Pendek</option>
                              @else
                              <option value="Panjang">Panjang</option>
                              <option selected value="Pendek">Pendek</option>
                              @endif
                        </select>
                      </div>
                          <div class="form-group">
                            <label>Kebersihan Telinga</label>
                            <select name="k_telinga" class="custom-select">
                              @if ($awal->k_telinga=="Bersih")
                              <option selected value="Bersih">Bersih</option>
                              <option value="Tidak">Tidak</option>
                              @else
                              <option value="Bersih">Bersih</option>
                              <option selected value="Tidak">Tidak</option>
                              @endif
                        </select>
                      </div>
                          <div class="form-group">
                            <label>Kebersihan Rambut</label>
                            <select name="k_rambut" class="custom-select">
                              @if ($awal->k_rambut=="Panjang")
                              <option selected value="Panjang">Panjang</option>
                              <option value="Sedang">Sedang</option>
                              <option value="Pendek">Pendek</option>
                              @elseif($awal->k_rambut=="Sedang")
                              <option value="Panjang">Panjang</option>
                              <option selected value="Sedang">Sedang</option>
                              <option value="Pendek">Pendek</option>
                              @else
                              <option value="Panjang">Panjang</option>
                              <option value="Sedang">Sedang</option>
                              <option selected value="Pendek">Pendek</option>
                              @endif
                        </select>
                      </div>
                          <div class="form-group">
                            <label>Kebersihan Gigi</label>
                            <select name="k_gigi" class="custom-select">
                              @if ($awal->k_gigi=="Bersih")
                              <option selected value="Bersih">Bersih</option>
                              <option value="Tidak Bersih">Tidak Bersih</option>
                              @else
                              <option value="Bersih">Bersih</option>
                              <option selected value="Tidak Bersih">Tidak Bersih</option>
                              @endif

                        </select>
                      </div>
                          <div class="form-group">
                            <label>Kebersihan Kulit</label>
                            <select name="k_kulit" class="custom-select">
                              @if ($awal->k_kulit=="1")
                              <option selected value="1">Bersih</option>
                              <option value="2">Tidak Ada Bercak</option>
                              <option value="3">Tidak Ada Luka Loreng</option>
                              <option value="4">Terdapat Bercak</option>
                              <option value="5">Luka Koreng</option>
                              <option value="6">Bintik Merah</option>
                              @elseif ($awal->k_kulit=="2")
                              <option value="1">Bersih</option>
                              <option selected value="2">Tidak Ada Bercak</option>
                              <option value="3">Tidak Ada Luka Loreng</option>
                              <option value="4">Terdapat Bercak</option>
                              <option value="5">Luka Koreng</option>
                              <option value="6">Bintik Merah</option>
                              @elseif ($awal->k_kulit=="3")
                              <option value="1">Bersih</option>
                              <option value="2">Tidak Ada Bercak</option>
                              <option selected value="3">Tidak Ada Luka Loreng</option>
                              <option value="4">Terdapat Bercak</option>
                              <option value="5">Luka Koreng</option>
                              <option value="6">Bintik Merah</option>
                              @elseif ($awal->k_kulit=="4")
                              <option value="1">Bersih</option>
                              <option value="2">Tidak Ada Bercak</option>
                              <option value="3">Tidak Ada Luka Loreng</option>
                              <option selected value="4">Terdapat Bercak</option>
                              <option value="5">Luka Koreng</option>
                              <option value="6">Bintik Merah</option>
                              @elseif ($awal->k_kulit=="5")
                              <option value="1">Bersih</option>
                              <option value="2">Tidak Ada Bercak</option>
                              <option value="3">Tidak Ada Luka Loreng</option>
                              <option value="4">Terdapat Bercak</option>
                              <option selected value="5">Luka Koreng</option>
                              <option value="6">Bintik Merah</option>
                              @elseif ($awal->k_kulit=="6")
                              <option value="1">Bersih</option>
                              <option value="2">Tidak Ada Bercak</option>
                              <option value="3">Tidak Ada Luka Loreng</option>
                              <option value="4">Terdapat Bercak</option>
                              <option value="5">Luka Koreng</option>
                              <option selected value="6">Bintik Merah</option>
                              @endif

                        </select>
                      </div>
                          <div class="form-group">
                            <label>Tinggi Badan (Cm)</label>
                            <input type="text" name="tinggi_b" placeholder="Masukan Tinggi Badan" class="form-control" value="{{$awal->tinggi_b}}" required>
                      </div>
                          <div class="form-group">
                            <label>Berat Badan (Kg)</label>
                            <input type="text" name="berat_b" placeholder="Masukan Tinggi Badan" class="form-control" value="{{$awal->berat_b}}" required>
                      </div>
                          <br>
                          <div class="form-group">
                            <input type="submit" value="proses" class="btn btn-primary">
                            <a href="{{route('kesehatan.index')}}" class="btn btn-danger">Batal</a>
                      </div>
                          @else
                          <div class="form-group">
                            <label>Tanggal Pengukuran (mm/dd/yyyy)</label>
                            <input id="tgl_pengukuran" type="date" name="tgl_pengukuran" placeholder="Masukan Nama Lengkap" class="form-control" value="{{Carbon\Carbon::today()->format('Y-m-d')}}" required>
                      </div>
                          <div class="form-group">
                            <label>Kebersihan Kuku</label>
                            <select name="k_kuku" class="custom-select">
                              <option value="Panjang">Panjang</option>
                              <option value="Pendek">Pendek</option>
                        </select>
                      </div>
                          <div class="form-group">
                            <label>Kebersihan Telinga</label>
                            <select name="k_telinga" class="custom-select">
                              <option value="Bersih">Bersih</option>
                              <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                          <div class="form-group">
                            <label>Kebersihan Rambut</label>
                            <select name="k_rambut" class="custom-select">
                              <option value="Panjang">Panjang</option>
                              <option value="Sedang">Sedang</option>
                              <option value="Pendek">Pendek</option>
                        </select>
                      </div>
                          <div class="form-group">
                            <label>Kebersihan Gigi</label>
                            <select name="k_gigi" class="custom-select">
                              <option value="Bersih">Bersih</option>
                              <option value="Tidak Bersih">Tidak Bersih</option>
                        </select>
                      </div>
                          <div class="form-group">
                            <label>Kebersihan Kulit</label>
                            <select name="k_kulit" class="custom-select">
                              <option selected value="1">Bersih</option>
                              <option value="2">Tidak Ada Bercak</option>
                              <option value="3">Tidak Ada Luka Loreng</option>
                              <option value="4">Terdapat Bercak</option>
                              <option value="5">Luka Koreng</option>
                              <option value="6">Bintik Merah</option>
                        </select>
                      </div>
                          <div class="form-group">
                            <label>Tinggi Badan (Cm)</label>
                            <input type="text" name="tinggi_b" placeholder="Masukan Tinggi Badan" class="form-control" value="{{old('tinggi_b')}}" required>
                      </div>
                          <div class="form-group">
                            <label>Berat Badan (Kg)</label>
                            <input type="text" name="berat_b" placeholder="Masukan Tinggi Badan" class="form-control" value="{{old('berat_b')}}" required>
                      </div>
                          <br>
                          <div class="form-group">
                            <input type="submit" value="proses" class="btn btn-primary">
                            <a href="{{route('kesehatan.index')}}" class="btn btn-danger">Batal</a>
                      </div>
                          @endif

                    </form>
                  </div>


                </div>

              </div>
                  <div class="col-lg-9">
                    <div class="card">
                      <div class="card-header d-flex align-items-center">
                        <h4>Hasil Data Kesehatan</h4>
                  </div>
                      <div class="card-body">
                        @if (isset($hasil))
                        <form action="{{route('kesehatan.store',$siswa->id)}}" method="POST">
                          @csrf
                          <div class="form-group">
                            <label>IMT</label>
                            <input type="text" readonly name="bmi" placeholder="" class="form-control" value="{{$hasil}}" required>
                      </div>

                          <div class="form-group">
                            <label>Kesimpulan Berat Badan</label>
                            <select name="keterangan_bb" class="custom-select">
                              <option value="Gizi Buruk">Gizi Buruk</option>
                              <option value="Gizi Kurang">Gizi Kurang</option>
                              <option value="Gizi Baik">Gizi Baik</option>
                              <option value="Gizi Lebih">Gizi Lebih</option>
                        </select>
                      </div>

                          <div class="form-group">
                            <label>Kesimpulan Tinggi Badan</label>
                            <select name="keterangan_tb" class="custom-select">
                              <option value="Sangat Pendek">Sangat Pendek</option>
                              <option value="Pendek">Pendek</option>
                              <option value="Normal">Normal</option>
                              <option value="Tinggi">Tinggi</option>
                        </select>
                      </div>

                          <div class="form-group">
                            <label>Kesimpulan IMT (Indeks Masa Tubuh)</label>
                            <select name="keterangan_bmi" class="custom-select">
                              <option value="Sangat Kurus">Sangat Kurus</option>
                              <option value="Kurus">Kurus</option>
                              <option value="Normal">Normal</option>
                              <option value="Gemuk">Gemuk</option>
                              <option value="Obesitas">Obesitas</option>
                        </select>
                      </div>
                          {{-- //////////// --}}
                          <div class="form-group">
                            <label>Kesimpulan Kebersihan Kuku</label>
                            <select name="kesimpulan_kuku" class="custom-select">
                              <option value="Sehat">Sehat</option>
                              <option value="Tidak Sehat">Tidak Sehat</option>
                        </select>
                      </div>
                          <div class="form-group">
                            <label>Kesimpulan Kebersihan Telinga</label>
                            <select name="kesimpulan_telinga" class="custom-select">
                              <option value="Sehat">Sehat</option>
                              <option value="Tidak Sehat">Tidak Sehat</option>
                        </select>
                      </div>
                          <div class="form-group">
                            <label>Kesimpulan Kebersihan Rambut</label>
                            <select name="kesimpulan_rambut" class="custom-select">
                              <option value="Sehat">Sehat</option>
                              <option value="Tidak Sehat">Tidak Sehat</option>
                        </select>
                      </div>
                          <div class="form-group">
                            <label>Kesimpulan Kebersihan Gigi</label>
                            <select name="kesimpulan_gigi" class="custom-select">
                              <option value="Sehat">Sehat</option>
                              <option value="Tidak Sehat">Tidak Sehat</option>
                        </select>
                      </div>
                          <div class="form-group">
                            <label>Kesimpulan Kebersihan Kulit</label>
                            <select name="kesimpulan_kulit" class="custom-select">
                              <option value="Sehat">Sehat</option>
                              <option value="Tidak Sehat">Tidak Sehat</option>
                        </select>
                      </div>

                          <input id="tgl_pengukuran2" type="hidden" name="tgl_pengukuran" value="{{$awal->tgl_pengukuran}}">
                          <input type="hidden" name="nilai_tb" value="{{$hasiltb}}">
                          <input type="hidden" name="nilai_bb" value="{{$hasilbb}}">
                          <input type="hidden" name="nilai_bmi" value="{{$hasilbmi}}">
                          <input type="hidden" name="umur" value="{{$totalbulan}}">
                          <input type="hidden" name="tinggi_b" value="{{$awal->tinggi_b}}">
                          <input type="hidden" name="berat_b" value="{{$awal->berat_b}}">
                          <input type="hidden" name="k_gigi" value="{{$awal->k_gigi}}">
                          <input type="hidden" name="k_rambut" value="{{$awal->k_rambut}}">
                          <input type="hidden" name="k_telinga" value="{{$awal->k_telinga}}">
                          <input type="hidden" name="k_kuku" value="{{$awal->k_kuku}}">


                          @if ($awal->k_kulit=="1")
                          <input type="hidden" name="k_kulit" value="Bersih">
                          @elseif ($awal->k_kulit=="2")
                          <input type="hidden" name="k_kulit" value="Tidak Ada Bercak">
                          @elseif ($awal->k_kulit=="3")
                          <input type="hidden" name="k_kulit" value="Tidak Ada Luka Loreng">
                          @elseif ($awal->k_kulit=="4")
                          <input type="hidden" name="k_kulit" value="Terdapat Bercak">
                          @elseif ($awal->k_kulit=="5")
                          <input type="hidden" name="k_kulit" value="Luka Koreng">
                          @else
                          <input type="hidden" name="k_kulit" value="Bintik Merah">
                          @endif


                          <br>
                          <div class="form-group">
                            <input type="submit" value="Simpan" class="btn btn-primary">
                      </div>
                    </form>
                        @endif
                  </div>
                </div>
              </div>
            </div>
                <div class="modal fade" id="myModal">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Daftar Gambar</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                        <img class="card-img-top" src="{{asset('/images/18.jpg')}}" alt="Card image">
                        <p>&nbsp;</p>
                        <img class="card-img-top" src="{{asset('/images/19.jpg')}}" alt="Card image">
                        <p>&nbsp;</p>
                        <img class="card-img-top" src="{{asset('/images/21.jpg')}}" alt="Card image">
                        <p>&nbsp;</p>
                        <img class="card-img-top" src="{{asset('/images/22.jpg')}}" alt="Card image">
                        <p>&nbsp;</p>
                        <img class="card-img-top" src="{{asset('/images/36.jpg')}}" alt="Card image">
                        <p>&nbsp;</p>
                        <img class="card-img-top" src="{{asset('/images/37.jpg')}}" alt="Card image">
                        <p>&nbsp;</p>
                        <img class="card-img-top" src="{{asset('/images/38.jpg')}}" alt="Card image">
                        <p>&nbsp;</p>
                        <img class="card-img-top" src="{{asset('/images/39.jpg')}}" alt="Card image">
                        <p>&nbsp;</p>
                        <img class="card-img-top" src="{{asset('/images/40.jpg')}}" alt="Card image">
                        <p>&nbsp;</p>
                        <img class="card-img-top" src="{{asset('/images/41.jpg')}}" alt="Card image">
                        <p>&nbsp;</p>
                        <img class="card-img-top" src="{{asset('/images/1.png')}}" alt="Card image">
                        <p>&nbsp;</p>
                        <img class="card-img-top" src="{{asset('/images/2.png')}}" alt="Card image">
                        <p>&nbsp;</p>
                        <img class="card-img-top" src="{{asset('/images/3.png')}}" alt="Card image">
                        <p>&nbsp;</p>
                        <img class="card-img-top" src="{{asset('/images/4.png')}}" alt="Card image">
                        <p>&nbsp;</p>
                        <img class="card-img-top" src="{{asset('/images/5.png')}}" alt="Card image">
                        <p>&nbsp;</p>
                        <img class="card-img-top" src="{{asset('/images/7.png')}}" alt="Card image">
                        <p>&nbsp;</p>
                        <img class="card-img-top" src="{{asset('/images/8.png')}}" alt="Card image">
                        <p>&nbsp;</p>
                  </div>

                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>
        @endsection

        @section('script')
        <script>
              $(document).ready(function() {

                // $('#tgl_pengukuran').change(function()
                // {
                  //     $('#tgl_pengukuran2').val($('#tgl_pengukuran').val());
                  // });

                });
              </script>
          @endsection
