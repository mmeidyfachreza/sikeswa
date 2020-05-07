@extends('admin.layout')
@section('content')
<section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Rekam Medis            </h1>
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
          <form action="{{route('rekammedik.update',$rekammedik->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header d-flex align-items-center">
                        <h4>Tanggal Pemeriksaan</h4>
                  </div>
                      <div class="card-body">
                        <p>Pastikan terisi terlebih dahulu</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">    
                                    <input type="date" name="tgl_pemeriksaan" placeholder="Masukan Nama Lengkap" class="form-control" value="{{Carbon\Carbon::today()->format('Y-m-d')}}" required>
                            </div>
                        </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label for="">Nama siswa : {{$rekammedik->siswa->nama}}</label>
                          </div>
                        </div>
                    </div>
                    
                      
                  </div>
                </div>
                    <div class="card">
                      <div class="card-header d-flex align-items-center">
                        <h4>Riwayat Kesehatan Anak </h4>
                  </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-sm-5 form-control-label"><b>Alergi makanan tertentu</b> <br><small class="text-primary"> </small></label>
                                @if ($rekammedik->alergi_makan=="tidak")
                                <div class="col-sm-7">
                                  <div class="i-checks">
                                    <input id="alergi_makan1" type="radio" value="ya"  name="alergi_makan" class="form-control-custom radio-custom">
                                    <label for="alergi_makan1">Ya</label>
                              </div>
                                  <div class="i-checks">
                                    <input id="alergi_makan2" type="radio" value="tidak" name="alergi_makan" checked="" class="form-control-custom radio-custom">
                                    <label for="alergi_makan2">Tidak</label>
                              </div>
                            </div>    
                                @else
                                <div class="col-sm-7">
                                  <div class="i-checks">
                                    <input id="alergi_makan1" type="radio" value="ya"  name="alergi_makan" checked="" class="form-control-custom radio-custom">
                                    <label for="alergi_makan1">Ya</label>
                              </div>
                                  <div class="i-checks">
                                    <input id="alergi_makan2" type="radio" value="tidak" name="alergi_makan" class="form-control-custom radio-custom">
                                    <label for="alergi_makan2">Tidak</label>
                              </div>
                            </div>    
                                @endif
                            
                        </div>
                            <div class="form-group">
                              <label>Jika ya sebutkan</label>
                              <textarea name="ket_alergi_makan" placeholder="Masukan alergi" class="form-control" id="" cols="30" rows="2">{{$rekammedik->ket_alergi_makan}}</textarea>
                        </div>
                      </div>
                          <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Alergi obat tertentu</b> <br><small class="text-primary"> </small></label>
                                  @if ($rekammedik->alergi_obat=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="alergi_obat1" type="radio" value="ya"  name="alergi_obat" class="form-control-custom radio-custom">
                                      <label for="alergi_obat1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="alergi_obat2" type="radio" value="tidak" name="alergi_obat" checked="" class="form-control-custom radio-custom">
                                      <label for="alergi_obat2">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="alergi_obat1" type="radio" value="ya"  name="alergi_obat" checked="" class="form-control-custom radio-custom">
                                      <label for="alergi_obat1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="alergi_obat2" type="radio" value="tidak" name="alergi_obat" class="form-control-custom radio-custom">
                                      <label for="alergi_obat2">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div>
                              <div class="form-group">
                                <label>Jika ya sebutkan</label>
                                <textarea name="ket_alergi_obat" placeholder="Masukan alergi" class="form-control" id="" cols="30" rows="2">{{$rekammedik->ket_alergi_obat}}</textarea>
                          </div>
                      </div>
                    </div>
                        <div class="line"></div>
                        <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Pernah mengalami cedera serius akibat kecelakaan</b><br><small class="text-primary"><b>(geger otak/patah tulang/lainnya) </b></small></label>
                                  @if ($rekammedik->cedera_serius=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="cedera_serius1" type="radio" value="ya"  name="cedera_serius" class="form-control-custom radio-custom">
                                      <label for="cedera_serius1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="cedera_serius2" type="radio" value="tidak" name="cedera_serius" checked="" class="form-control-custom radio-custom">
                                      <label for="cedera_serius2">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="cedera_serius1" type="radio" value="ya"  name="cedera_serius" checked="" class="form-control-custom radio-custom">
                                      <label for="cedera_serius1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="cedera_serius2" type="radio" value="tidak" name="cedera_serius" class="form-control-custom radio-custom">
                                      <label for="cedera_serius2">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div>
                              <div class="form-group">
                                <label>Jika ya sebutkan</label>
                                <textarea name="ket_cedera_serius" placeholder="Masukan alergi" class="form-control" id="" cols="30" rows="2">{{$rekammedik->ket_cedera_serius}}</textarea>
                          </div>
                        </div>
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Riwayat kejang berulang</b><br><small class="text-primary"><b></b></small></label>
                                  @if ($rekammedik->kejang=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="kejang1" type="radio" value="ya"  name="kejang" class="form-control-custom radio-custom">
                                      <label for="kejang1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="kejang2" type="radio" value="tidak" name="kejang" checked="" class="form-control-custom radio-custom">
                                      <label for="kejang2">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="kejang1" type="radio" value="ya"  name="kejang" checked="" class="form-control-custom radio-custom">
                                      <label for="kejang1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="kejang2" type="radio" value="tidak" name="kejang" class="form-control-custom radio-custom">
                                      <label for="kejang2">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div>        
                        </div>
                    </div>
                        <div class="line"></div>
                        <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Riwayat Pingsan</b><br><small class="text-primary"><b></b></small></label>
                                  @if ($rekammedik->pingsan=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="pingsan1" type="radio" value="ya"  name="pingsan" class="form-control-custom radio-custom">
                                      <label for="pingsan1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="pingsan2" type="radio" value="tidak" name="pingsan" checked="" class="form-control-custom radio-custom">
                                      <label for="pingsan2">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="pingsan1" type="radio" value="ya"  name="pingsan" checked="" class="form-control-custom radio-custom">
                                      <label for="pingsan1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="pingsan2" type="radio" value="tidak" name="pingsan" class="form-control-custom radio-custom">
                                      <label for="pingsan2">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div>
                        </div>
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Riwayat transfusi darah berulang </b><br><small class="text-primary"><b></b></small></label>
                                  @if ($rekammedik->transfusi_darah=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="transfusi_darah1" type="radio" value="ya"  name="transfusi_darah" class="form-control-custom radio-custom">
                                      <label for="transfusi_darah1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="transfusi_darah2" type="radio" value="tidak" name="transfusi_darah" checked="" class="form-control-custom radio-custom">
                                      <label for="transfusi_darah2">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="transfusi_darah1" type="radio" value="ya"  name="transfusi_darah" checked="" class="form-control-custom radio-custom">
                                      <label for="transfusi_darah1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="transfusi_darah2" type="radio" value="tidak" name="transfusi_darah" class="form-control-custom radio-custom">
                                      <label for="transfusi_darah2">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div>   
                        </div>
                    </div>
                        <div class="line"></div>
                        <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Riwayat kelainan bawaan yang dimiliki</b><br><small class="text-primary"><b></b></small></label>
                                  @if ($rekammedik->kelainan=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="kelainan1" type="radio" value="ya"  name="kelainan" class="form-control-custom radio-custom">
                                      <label for="kelainan1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="kelainan2" type="radio" value="tidak" name="kelainan" checked="" class="form-control-custom radio-custom">
                                      <label for="kelainan2">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="kelainan1" type="radio" value="ya"  name="kelainan" checked="" class="form-control-custom radio-custom">
                                      <label for="kelainan1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="kelainan2" type="radio" value="tidak" name="kelainan" class="form-control-custom radio-custom">
                                      <label for="kelainan2">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div>
                              <div class="form-group">
                                <label>Jika ya sebutkan</label>
                                <textarea name="ket_kelainan" placeholder="Masukan kelainan" class="form-control" id="" cols="30" rows="2">{{$rekammedik->ket_kelainan}}</textarea>
                          </div>      
                        </div>
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Riwayat penyakit lainnya</b><br><small class="text-primary"><b></b></small></label>
                                  @if ($rekammedik->lainnya=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="lainnya1" type="radio" value="ya"  name="lainnya" class="form-control-custom radio-custom">
                                      <label for="lainnya1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="lainnya2" type="radio" value="tidak" name="lainnya" checked="" class="form-control-custom radio-custom">
                                      <label for="lainnya2">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="lainnya1" type="radio" value="ya"  name="lainnya" checked="" class="form-control-custom radio-custom">
                                      <label for="lainnya1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="lainnya2" type="radio" value="tidak" name="lainnya" class="form-control-custom radio-custom">
                                      <label for="lainnya2">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div>
                              <div class="form-group">
                                <label>Jika ya sebutkan</label>
                                <textarea name="ket_lainnya" placeholder="Masukan penyakit" class="form-control" id="" cols="30" rows="2">{{$rekammedik->ket_lainnya}}</textarea>
                          </div>        
                        </div>
                    </div>
                  </div>
                </div>
              </div>
                  <div class="col-lg-12"> 
                    <div class="card">
                      <div class="card-header d-flex align-items-center">
                        <h4>Riwayat Imunisasi (Khusus Peserta didik SD/MI) </h4>
                  </div>
                      <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Memiliki catatan imunisasi</b> <br><small class="text-primary"> </small></label>
                                  @if ($rekammedik->imunisasi=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="imunisasi1" type="radio" value="ya"  name="imunisasi" class="form-control-custom radio-custom">
                                      <label for="imunisasi1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="imunisasi2" type="radio" value="tidak" name="imunisasi" checked="" class="form-control-custom radio-custom">
                                      <label for="imunisasi2">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="imunisasi1" type="radio" value="ya"  name="imunisasi" checked="" class="form-control-custom radio-custom">
                                      <label for="imunisasi1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="imunisasi2" type="radio" value="tidak" name="imunisasi" class="form-control-custom radio-custom">
                                      <label for="imunisasi2">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div>
                        </div>
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Saat bayi mendapat imunisasi </b> <br><small class="text-primary"> </small></label>
                                  @if ($rekammedik->imunisasi_bayi=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="imunisasi_bayi1" type="radio" value="ya"  name="imunisasi_bayi" class="form-control-custom radio-custom">
                                      <label for="imunisasi_bayi1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="imunisasi_bayi2" type="radio" value="tidak" name="imunisasi_bayi" checked="" class="form-control-custom radio-custom">
                                      <label for="imunisasi_bayi2">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="imunisasi_bayi1" type="radio" value="ya"  name="imunisasi_bayi" checked="" class="form-control-custom radio-custom">
                                      <label for="imunisasi_bayi1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="imunisasi_bayi2" type="radio" value="tidak" name="imunisasi_bayi" class="form-control-custom radio-custom">
                                      <label for="imunisasi_bayi2">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div>            
                        </div>
                    </div>
                        <div class="line"></div>
                        <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Pada SD kelas 1 mendapat imunisasi</b><br><small class="text-primary"><b></b></small></label>
                                  @if ($rekammedik->imun_sd_1=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="imun_sd_11" type="radio" value="ya"  name="imun_sd_1" class="form-control-custom radio-custom">
                                      <label for="imun_sd_11">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="imun_sd_12" type="radio" value="tidak" name="imun_sd_1" checked="" class="form-control-custom radio-custom">
                                      <label for="imun_sd_12">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="imun_sd_11" type="radio" value="ya"  name="imun_sd_1" checked="" class="form-control-custom radio-custom">
                                      <label for="imun_sd_11">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="imun_sd_12" type="radio" value="tidak" name="imun_sd_1" class="form-control-custom radio-custom">
                                      <label for="imun_sd_12">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div>            
                        </div>
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Pada SD kelas 2 mendapat imunisasi</b><br><small class="text-primary"><b></b></small></label>
                                  @if ($rekammedik->imun_sd_2=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="imun_sd_21" type="radio" value="ya"  name="imun_sd_2" class="form-control-custom radio-custom">
                                      <label for="imun_sd_21">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="imun_sd_22" type="radio" value="tidak" name="imun_sd_2" checked="" class="form-control-custom radio-custom">
                                      <label for="imun_sd_22">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="imun_sd_21" type="radio" value="ya"  name="imun_sd_2" checked="" class="form-control-custom radio-custom">
                                      <label for="imun_sd_21">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="imun_sd_22" type="radio" value="tidak" name="imun_sd_2" class="form-control-custom radio-custom">
                                      <label for="imun_sd_22">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div>            
                        </div>
                    </div>
                        <div class="line"></div>
                        <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Pada SD kelas 3 mendapat imunisasi</b><br><small class="text-primary"><b></b></small></label>
                                  @if ($rekammedik->imun_sd_3=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="imun_sd_31" type="radio" value="ya"  name="imun_sd_3" class="form-control-custom radio-custom">
                                      <label for="imun_sd_31">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="imun_sd_32" type="radio" value="tidak" name="imun_sd_3" checked="" class="form-control-custom radio-custom">
                                      <label for="imun_sd_32">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="imun_sd_31" type="radio" value="ya"  name="imun_sd_3" checked="" class="form-control-custom radio-custom">
                                      <label for="imun_sd_31">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="imun_sd_32" type="radio" value="tidak" name="imun_sd_3" class="form-control-custom radio-custom">
                                      <label for="imun_sd_32">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div>            
                        </div>
                            <div class="col-lg-6">
                                    
                            </div>
                    </div>
                    
                  </div>
                </div>
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                          <h4>Gaya Hidup </h4>
                    </div>
                        <div class="card-body">
                          <div class="row">
                              <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label"><b>Sarapan</b> <br><small class="text-primary"> </small></label>
                                    @if ($rekammedik->sarapan=="tidak")
                                    <div class="col-sm-7">
                                      <div class="i-checks">
                                        <input id="sarapan1" type="radio" value="ya"  name="sarapan" class="form-control-custom radio-custom">
                                        <label for="sarapan1">Ya</label>
                                  </div>
                                      <div class="i-checks">
                                        <input id="sarapan2" type="radio" value="tidak" name="sarapan" checked="" class="form-control-custom radio-custom">
                                        <label for="sarapan2">Tidak</label>
                                  </div>
                                </div>    
                                    @else
                                    <div class="col-sm-7">
                                      <div class="i-checks">
                                        <input id="sarapan1" type="radio" value="ya"  name="sarapan" checked="" class="form-control-custom radio-custom">
                                        <label for="sarapan1">Ya</label>
                                  </div>
                                      <div class="i-checks">
                                        <input id="sarapan2" type="radio" value="tidak" name="sarapan" class="form-control-custom radio-custom">
                                        <label for="sarapan2">Tidak</label>
                                  </div>
                                </div>    
                                    @endif
                                
                            </div>
                          </div>
                              <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label"><b>Jajan</b> <br><small class="text-primary"> </small></label>
                                    @if ($rekammedik->jajan=="tidak")
                                    <div class="col-sm-7">
                                      <div class="i-checks">
                                        <input id="jajan1" type="radio" value="ya"  name="jajan" class="form-control-custom radio-custom">
                                        <label for="jajan1">Ya</label>
                                  </div>
                                      <div class="i-checks">
                                        <input id="jajan2" type="radio" value="tidak" name="jajan" checked="" class="form-control-custom radio-custom">
                                        <label for="jajan2">Tidak</label>
                                  </div>
                                </div>    
                                    @else
                                    <div class="col-sm-7">
                                      <div class="i-checks">
                                        <input id="jajan1" type="radio" value="ya"  name="jajan" checked="" class="form-control-custom radio-custom">
                                        <label for="jajan1">Ya</label>
                                  </div>
                                      <div class="i-checks">
                                        <input id="jajan2" type="radio" value="tidak" name="jajan" class="form-control-custom radio-custom">
                                        <label for="jajan2">Tidak</label>
                                  </div>
                                </div>    
                                    @endif
                                
                            </div>            
                          </div>
                      </div>
                          <div class="line"></div>
                          <div class="row">
                              <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label"><b>Resiko merokok</b><br><small class="text-primary"><b></b></small></label>
                                    @if ($rekammedik->res_merokok=="tidak")
                                    <div class="col-sm-7">
                                      <div class="i-checks">
                                        <input id="res_merokok1" type="radio" value="ya"  name="res_merokok" class="form-control-custom radio-custom">
                                        <label for="res_merokok1">Ya</label>
                                  </div>
                                      <div class="i-checks">
                                        <input id="res_merokok2" type="radio" value="tidak" name="res_merokok" checked="" class="form-control-custom radio-custom">
                                        <label for="res_merokok2">Tidak</label>
                                  </div>
                                </div>    
                                    @else
                                    <div class="col-sm-7">
                                      <div class="i-checks">
                                        <input id="res_merokok1" type="radio" value="ya"  name="res_merokok" checked="" class="form-control-custom radio-custom">
                                        <label for="res_merokok1">Ya</label>
                                  </div>
                                      <div class="i-checks">
                                        <input id="res_merokok2" type="radio" value="tidak" name="res_merokok" class="form-control-custom radio-custom">
                                        <label for="res_merokok2">Tidak</label>
                                  </div>
                                </div>    
                                    @endif
                                
                            </div> 
                          </div>
                              <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label"><b>Resiko minum minuman beralkohol</b><br><small class="text-primary"><b></b></small></label>
                                    @if ($rekammedik->res_alkohol=="tidak")
                                    <div class="col-sm-7">
                                      <div class="i-checks">
                                        <input id="res_alkohol1" type="radio" value="ya"  name="res_alkohol" class="form-control-custom radio-custom">
                                        <label for="res_alkohol1">Ya</label>
                                  </div>
                                      <div class="i-checks">
                                        <input id="res_alkohol2" type="radio" value="tidak" name="res_alkohol" checked="" class="form-control-custom radio-custom">
                                        <label for="res_alkohol2">Tidak</label>
                                  </div>
                                </div>    
                                    @else
                                    <div class="col-sm-7">
                                      <div class="i-checks">
                                        <input id="res_alkohol1" type="radio" value="ya"  name="res_alkohol" checked="" class="form-control-custom radio-custom">
                                        <label for="res_alkohol1">Ya</label>
                                  </div>
                                      <div class="i-checks">
                                        <input id="res_alkohol2" type="radio" value="tidak" name="res_alkohol" class="form-control-custom radio-custom">
                                        <label for="res_alkohol2">Tidak</label>
                                  </div>
                                </div>    
                                    @endif
                                
                            </div>            
                          </div>
                      </div>                  
                    </div>
                </div>
              </div>
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header d-flex align-items-center">
                        <h4>Riwayat Kesehatan Keluarga</h4>
                  </div>
                      <div class="card-body">
                        
                        <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Tuberkolosis (TBC) Diabetes</b><br><small class="text-primary"><b></b></small></label>
                                  @if ($rekammedik->tbc=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="tbc1" type="radio" value="ya"  name="tbc" class="form-control-custom radio-custom">
                                      <label for="tbc1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="tbc2" type="radio" value="tidak" name="tbc" checked="" class="form-control-custom radio-custom">
                                      <label for="tbc2">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="tbc1" type="radio" value="ya"  name="tbc" checked="" class="form-control-custom radio-custom">
                                      <label for="tbc1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="tbc2" type="radio" value="tidak" name="tbc" class="form-control-custom radio-custom">
                                      <label for="tbc2">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div> 
                        </div>
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Diabetes Melitus</b><br><small class="text-primary"><b></b></small></label>
                                  @if ($rekammedik->dm=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="dm1" type="radio" value="ya"  name="dm" class="form-control-custom radio-custom">
                                      <label for="dm1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="dm2" type="radio" value="tidak" name="dm" checked="" class="form-control-custom radio-custom">
                                      <label for="dm2">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="dm1" type="radio" value="ya"  name="dm" checked="" class="form-control-custom radio-custom">
                                      <label for="dm1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="dm2" type="radio" value="tidak" name="dm" class="form-control-custom radio-custom">
                                      <label for="dm2">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div>  
                        </div>
                    </div>
                        <div class="line"></div>
                        <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Hepatitis/Sakit Kuning</b><br><small class="text-primary"><b></b></small></label>
                                  @if ($rekammedik->hepatitis=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="hepatitis1" type="radio" value="ya"  name="hepatitis" class="form-control-custom radio-custom">
                                      <label for="hepatitis1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="hepatitis2" type="radio" value="tidak" name="hepatitis" checked="" class="form-control-custom radio-custom">
                                      <label for="hepatitis2">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="hepatitis1" type="radio" value="ya"  name="hepatitis" checked="" class="form-control-custom radio-custom">
                                      <label for="hepatitis1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="hepatitis2" type="radio" value="tidak" name="hepatitis" class="form-control-custom radio-custom">
                                      <label for="hepatitis2">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div> 
                        </div>
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Asma/Bengek</b><br><small class="text-primary"><b></b></small></label>
                                  @if ($rekammedik->asma=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="asma1" type="radio" value="ya"  name="asma" class="form-control-custom radio-custom">
                                      <label for="asma1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="asma2" type="radio" value="tidak" name="asma" checked="" class="form-control-custom radio-custom">
                                      <label for="asma2">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="asma1" type="radio" value="ya"  name="asma" checked="" class="form-control-custom radio-custom">
                                      <label for="asma1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="asma2" type="radio" value="tidak" name="asma" class="form-control-custom radio-custom">
                                      <label for="asma2">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div>  
                        </div>
                    </div>
                        <div class="line"></div>
                        <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Penyakit jantung</b><br><small class="text-primary"><b></b></small></label>
                                  @if ($rekammedik->jantung=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="jantung1" type="radio" value="ya"  name="jantung" class="form-control-custom radio-custom">
                                      <label for="jantung1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="jantung2" type="radio" value="tidak" name="jantung" checked="" class="form-control-custom radio-custom">
                                      <label for="jantung2">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="jantung1" type="radio" value="ya"  name="jantung" checked="" class="form-control-custom radio-custom">
                                      <label for="jantung1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="jantung2" type="radio" value="tidak" name="jantung" class="form-control-custom radio-custom">
                                      <label for="jantung2">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div> 
                        </div>
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Stroke/lumpuh</b><br><small class="text-primary"><b></b></small></label>
                                  @if ($rekammedik->stroke=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="stroke1" type="radio" value="ya"  name="stroke" class="form-control-custom radio-custom">
                                      <label for="stroke1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="stroke2" type="radio" value="tidak" name="stroke" checked="" class="form-control-custom radio-custom">
                                      <label for="stroke2">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="stroke1" type="radio" value="ya"  name="stroke" checked="" class="form-control-custom radio-custom">
                                      <label for="stroke1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="stroke2" type="radio" value="tidak" name="stroke" class="form-control-custom radio-custom">
                                      <label for="stroke2">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div>  
                        </div>
                    </div>
                        <div class="line"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label"><b>Obesitas/gemuk sekali</b><br><small class="text-primary"><b></b></small></label>
                                    @if ($rekammedik->obesitas=="tidak")
                                    <div class="col-sm-7">
                                      <div class="i-checks">
                                        <input id="obesitas1" type="radio" value="ya"  name="obesitas" class="form-control-custom radio-custom">
                                        <label for="obesitas1">Ya</label>
                                  </div>
                                      <div class="i-checks">
                                        <input id="obesitas2" type="radio" value="tidak" name="obesitas" checked="" class="form-control-custom radio-custom">
                                        <label for="obesitas2">Tidak</label>
                                  </div>
                                </div>    
                                    @else
                                    <div class="col-sm-7">
                                      <div class="i-checks">
                                        <input id="obesitas1" type="radio" value="ya"  name="obesitas" checked="" class="form-control-custom radio-custom">
                                        <label for="obesitas1">Ya</label>
                                  </div>
                                      <div class="i-checks">
                                        <input id="obesitas2" type="radio" value="tidak" name="obesitas" class="form-control-custom radio-custom">
                                        <label for="obesitas2">Tidak</label>
                                  </div>
                                </div>    
                                    @endif
                                
                            </div> 
                        </div>
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label"><b>Tekanan darah tinggi</b><br><small class="text-primary"><b></b></small></label>
                                    @if ($rekammedik->tdt=="tidak")
                                    <div class="col-sm-7">
                                      <div class="i-checks">
                                        <input id="tdt1" type="radio" value="ya"  name="tdt" class="form-control-custom radio-custom">
                                        <label for="tdt1">Ya</label>
                                  </div>
                                      <div class="i-checks">
                                        <input id="tdt2" type="radio" value="tidak" name="tdt" checked="" class="form-control-custom radio-custom">
                                        <label for="tdt2">Tidak</label>
                                  </div>
                                </div>    
                                    @else
                                    <div class="col-sm-7">
                                      <div class="i-checks">
                                        <input id="tdt1" type="radio" value="ya"  name="tdt" checked="" class="form-control-custom radio-custom">
                                        <label for="tdt1">Ya</label>
                                  </div>
                                      <div class="i-checks">
                                        <input id="tdt2" type="radio" value="tidak" name="tdt" class="form-control-custom radio-custom">
                                        <label for="tdt2">Tidak</label>
                                  </div>
                                </div>    
                                    @endif
                                
                            </div>  
                        </div>
                    </div>
                        <div class="line"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label"><b>Kanker/tumor ganas</b><br><small class="text-primary"><b></b></small></label>
                                    @if ($rekammedik->kanker=="tidak")
                                    <div class="col-sm-7">
                                      <div class="i-checks">
                                        <input id="kanker1" type="radio" value="ya"  name="kanker" class="form-control-custom radio-custom">
                                        <label for="kanker1">Ya</label>
                                  </div>
                                      <div class="i-checks">
                                        <input id="kanker2" type="radio" value="tidak" name="kanker" checked="" class="form-control-custom radio-custom">
                                        <label for="kanker2">Tidak</label>
                                  </div>
                                </div>    
                                    @else
                                    <div class="col-sm-7">
                                      <div class="i-checks">
                                        <input id="kanker1" type="radio" value="ya"  name="kanker" checked="" class="form-control-custom radio-custom">
                                        <label for="kanker1">Ya</label>
                                  </div>
                                      <div class="i-checks">
                                        <input id="kanker2" type="radio" value="tidak" name="kanker" class="form-control-custom radio-custom">
                                        <label for="kanker2">Tidak</label>
                                  </div>
                                </div>    
                                    @endif
                                
                            </div> 
                        </div>
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label"><b>Anamemia</b><br><small class="text-primary"><b></b></small></label>
                                    @if ($rekammedik->anamemia=="tidak")
                                    <div class="col-sm-7">
                                      <div class="i-checks">
                                        <input id="anamemia1" type="radio" value="ya"  name="anamemia" class="form-control-custom radio-custom">
                                        <label for="anamemia1">Ya</label>
                                  </div>
                                      <div class="i-checks">
                                        <input id="anamemia2" type="radio" value="tidak" name="anamemia" checked="" class="form-control-custom radio-custom">
                                        <label for="anamemia2">Tidak</label>
                                  </div>
                                </div>    
                                    @else
                                    <div class="col-sm-7">
                                      <div class="i-checks">
                                        <input id="anamemia1" type="radio" value="ya"  name="anamemia" checked="" class="form-control-custom radio-custom">
                                        <label for="anamemia1">Ya</label>
                                  </div>
                                      <div class="i-checks">
                                        <input id="anamemia2" type="radio" value="tidak" name="anamemia" class="form-control-custom radio-custom">
                                        <label for="anamemia2">Tidak</label>
                                  </div>
                                </div>    
                                    @endif
                                
                            </div>  
                        </div>
                    </div><div class="line"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label"><b>Thalasemia</b><br><small class="text-primary"><b></b></small></label>
                                    @if ($rekammedik->thalasemia=="tidak")
                                    <div class="col-sm-7">
                                      <div class="i-checks">
                                        <input id="thalasemia1" type="radio" value="ya"  name="thalasemia" class="form-control-custom radio-custom">
                                        <label for="thalasemia1">Ya</label>
                                  </div>
                                      <div class="i-checks">
                                        <input id="thalasemia2" type="radio" value="tidak" name="thalasemia" checked="" class="form-control-custom radio-custom">
                                        <label for="thalasemia2">Tidak</label>
                                  </div>
                                </div>    
                                    @else
                                    <div class="col-sm-7">
                                      <div class="i-checks">
                                        <input id="thalasemia1" type="radio" value="ya"  name="thalasemia" checked="" class="form-control-custom radio-custom">
                                        <label for="thalasemia1">Ya</label>
                                  </div>
                                      <div class="i-checks">
                                        <input id="thalasemia2" type="radio" value="tidak" name="thalasemia" class="form-control-custom radio-custom">
                                        <label for="thalasemia2">Tidak</label>
                                  </div>
                                </div>    
                                    @endif
                                
                            </div> 
                        </div>
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label"><b>Hemofilia</b><br><small class="text-primary"><b></b></small></label>
                                    @if ($rekammedik->hemofilia=="tidak")
                                    <div class="col-sm-7">
                                      <div class="i-checks">
                                        <input id="hemofilia1" type="radio" value="ya"  name="hemofilia" class="form-control-custom radio-custom">
                                        <label for="hemofilia1">Ya</label>
                                  </div>
                                      <div class="i-checks">
                                        <input id="hemofilia2" type="radio" value="tidak" name="hemofilia" checked="" class="form-control-custom radio-custom">
                                        <label for="hemofilia2">Tidak</label>
                                  </div>
                                </div>    
                                    @else
                                    <div class="col-sm-7">
                                      <div class="i-checks">
                                        <input id="hemofilia1" type="radio" value="ya"  name="hemofilia" checked="" class="form-control-custom radio-custom">
                                        <label for="hemofilia1">Ya</label>
                                  </div>
                                      <div class="i-checks">
                                        <input id="hemofilia2" type="radio" value="tidak" name="hemofilia" class="form-control-custom radio-custom">
                                        <label for="hemofilia2">Tidak</label>
                                  </div>
                                </div>    
                                    @endif
                                
                            </div>  
                        </div>
                    </div>
    
                    
                  </div>
                </div>
              </div>
                  <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header d-flex align-items-center">
                            <h4>Kesehatan Reproduksi (Untuk Peserta didik mulai dari kelas 4 SD)</h4>
                      </div>
                          <div class="card-body">
                              <p>Peserta Didik Perempuan</p>
                            <div class="row">
                                <div class="col-lg-6">
                                  <div class="form-group row">
                                      <label class="col-sm-5 form-control-label"><b>Gangguan pubertas</b> <br><small class="text-primary"> </small></label>
                                      @if ($rekammedik->pubertas=="tidak")
                                      <div class="col-sm-7">
                                        <div class="i-checks">
                                          <input id="pubertas1" type="radio" value="ya"  name="pubertas" class="form-control-custom radio-custom">
                                          <label for="pubertas1">Ya</label>
                                    </div>
                                        <div class="i-checks">
                                          <input id="pubertas2" type="radio" value="tidak" name="pubertas" checked="" class="form-control-custom radio-custom">
                                          <label for="pubertas2">Tidak</label>
                                    </div>
                                  </div>    
                                      @else
                                      <div class="col-sm-7">
                                        <div class="i-checks">
                                          <input id="pubertas1" type="radio" value="ya"  name="pubertas" checked="" class="form-control-custom radio-custom">
                                          <label for="pubertas1">Ya</label>
                                    </div>
                                        <div class="i-checks">
                                          <input id="pubertas2" type="radio" value="tidak" name="pubertas" class="form-control-custom radio-custom">
                                          <label for="pubertas2">Tidak</label>
                                    </div>
                                  </div>    
                                      @endif
                                  
                              </div>
                            </div>
                                <div class="col-lg-6">
                                  <div class="form-group row">
                                      <label class="col-sm-5 form-control-label"><b>Gangguan menstruasi</b> <br><small class="text-primary"> </small></label>
                                      @if ($rekammedik->menstruasi=="tidak")
                                      <div class="col-sm-7">
                                        <div class="i-checks">
                                          <input id="menstruasi1" type="radio" value="ya"  name="menstruasi" class="form-control-custom radio-custom">
                                          <label for="menstruasi1">Ya</label>
                                    </div>
                                        <div class="i-checks">
                                          <input id="menstruasi2" type="radio" value="tidak" name="menstruasi" checked="" class="form-control-custom radio-custom">
                                          <label for="menstruasi2">Tidak</label>
                                    </div>
                                  </div>    
                                      @else
                                      <div class="col-sm-7">
                                        <div class="i-checks">
                                          <input id="menstruasi1" type="radio" value="ya"  name="menstruasi" checked="" class="form-control-custom radio-custom">
                                          <label for="menstruasi1">Ya</label>
                                    </div>
                                        <div class="i-checks">
                                          <input id="menstruasi2" type="radio" value="tidak" name="menstruasi" class="form-control-custom radio-custom">
                                          <label for="menstruasi2">Tidak</label>
                                    </div>
                                  </div>    
                                      @endif
                                  
                              </div>            
                            </div>
                        </div>
                            <div class="line"></div>
                            <div class="row">
                                <div class="col-lg-6">
                                  <div class="form-group row">
                                      <label class="col-sm-5 form-control-label"><b>Resiko IMS</b><br><small class="text-primary"><b></b></small></label>
                                      @if ($rekammedik->ims_p=="tidak")
                                      <div class="col-sm-7">
                                        <div class="i-checks">
                                          <input id="ims_p1" type="radio" value="ya"  name="ims_p" class="form-control-custom radio-custom">
                                          <label for="ims_p1">Ya</label>
                                    </div>
                                        <div class="i-checks">
                                          <input id="ims_p2" type="radio" value="tidak" name="ims_p" checked="" class="form-control-custom radio-custom">
                                          <label for="ims_p2">Tidak</label>
                                    </div>
                                  </div>    
                                      @else
                                      <div class="col-sm-7">
                                        <div class="i-checks">
                                          <input id="ims_p1" type="radio" value="ya"  name="ims_p" checked="" class="form-control-custom radio-custom">
                                          <label for="ims_p1">Ya</label>
                                    </div>
                                        <div class="i-checks">
                                          <input id="ims_p2" type="radio" value="tidak" name="ims_p" class="form-control-custom radio-custom">
                                          <label for="ims_p2">Tidak</label>
                                    </div>
                                  </div>    
                                      @endif
                                  
                              </div> 
                            </div>
                                <div class="col-lg-6">
                                             
                                </div>
                        </div>
                            <div class="line"></div>
                            <p>Peserta Didik Laki-laki</p>
                            <div class="row">
                                <div class="col-lg-6">
                                  <div class="form-group row">
                                      <label class="col-sm-5 form-control-label"><b>Resiko IMS</b><br><small class="text-primary"><b></b></small></label>
                                      @if ($rekammedik->ims_l=="tidak")
                                      <div class="col-sm-7">
                                        <div class="i-checks">
                                          <input id="ims_l1" type="radio" value="ya"  name="ims_l" class="form-control-custom radio-custom">
                                          <label for="ims_l1">Ya</label>
                                    </div>
                                        <div class="i-checks">
                                          <input id="ims_l2" type="radio" value="tidak" name="ims_l" checked="" class="form-control-custom radio-custom">
                                          <label for="ims_l2">Tidak</label>
                                    </div>
                                  </div>    
                                      @else
                                      <div class="col-sm-7">
                                        <div class="i-checks">
                                          <input id="ims_l1" type="radio" value="ya"  name="ims_l" checked="" class="form-control-custom radio-custom">
                                          <label for="ims_l1">Ya</label>
                                    </div>
                                        <div class="i-checks">
                                          <input id="ims_l2" type="radio" value="tidak" name="ims_l" class="form-control-custom radio-custom">
                                          <label for="ims_l2">Tidak</label>
                                    </div>
                                  </div>    
                                      @endif
                                  
                              </div>            
                            </div>
                        </div>                   
                      </div>
                  </div>
              </div>
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header d-flex align-items-center">
                        <h4>Kesehatan Mental Emosional</h4>
                  </div>
                      <div class="card-body">
                          <p>Skor Kesulitan</p>
                        <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Gejala Emosional</b> <br><small class="text-primary"> </small></label>
                                  @if ($rekammedik->gej_emosi=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="gej_emosi1" type="radio" value="ya"  name="gej_emosi" class="form-control-custom radio-custom">
                                      <label for="gej_emosi1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="gej_emosi2" type="radio" value="tidak" name="gej_emosi" checked="" class="form-control-custom radio-custom">
                                      <label for="gej_emosi2">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="gej_emosi1" type="radio" value="ya"  name="gej_emosi" checked="" class="form-control-custom radio-custom">
                                      <label for="gej_emosi1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="gej_emosi2" type="radio" value="tidak" name="gej_emosi" class="form-control-custom radio-custom">
                                      <label for="gej_emosi2">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div>
                        </div>
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Dominasi O</b> <br><small class="text-primary"> </small></label>
                                  @if ($rekammedik->mas_perilaku=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="mas_perilaku1" type="radio" value="ya"  name="mas_perilaku" class="form-control-custom radio-custom">
                                      <label for="mas_perilaku1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="mas_perilaku2" type="radio" value="tidak" name="mas_perilaku" checked="" class="form-control-custom radio-custom">
                                      <label for="mas_perilaku2">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="mas_perilaku1" type="radio" value="ya"  name="mas_perilaku" checked="" class="form-control-custom radio-custom">
                                      <label for="mas_perilaku1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="mas_perilaku2" type="radio" value="tidak" name="mas_perilaku" class="form-control-custom radio-custom">
                                      <label for="mas_perilaku2">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div>            
                        </div>
                    </div>
                        <div class="line"></div>
                        <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Hiperaktifitas</b><br><small class="text-primary"><b></b></small></label>
                                  @if ($rekammedik->hiperaktifitas=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="hiperaktifitas1" type="radio" value="ya"  name="hiperaktifitas" class="form-control-custom radio-custom">
                                      <label for="hiperaktifitas1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="hiperaktifitas2" type="radio" value="tidak" name="hiperaktifitas" checked="" class="form-control-custom radio-custom">
                                      <label for="hiperaktifitas2">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="hiperaktifitas1" type="radio" value="ya"  name="hiperaktifitas" checked="" class="form-control-custom radio-custom">
                                      <label for="hiperaktifitas1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="hiperaktifitas2" type="radio" value="tidak" name="hiperaktifitas" class="form-control-custom radio-custom">
                                      <label for="hiperaktifitas2">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div> 
                        </div>
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Masalah Teman Sebaya</b><br><small class="text-primary"><b></b></small></label>
                                  @if ($rekammedik->mas_tmnsbya=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="mas_tmnsbya1" type="radio" value="ya"  name="mas_tmnsbya" class="form-control-custom radio-custom">
                                      <label for="mas_tmnsbya1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="mas_tmnsbya2" type="radio" value="tidak" name="mas_tmnsbya" checked="" class="form-control-custom radio-custom">
                                      <label for="mas_tmnsbya2">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="mas_tmnsbya1" type="radio" value="ya"  name="mas_tmnsbya" checked="" class="form-control-custom radio-custom">
                                      <label for="mas_tmnsbya1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="mas_tmnsbya2" type="radio" value="tidak" name="mas_tmnsbya" class="form-control-custom radio-custom">
                                      <label for="mas_tmnsbya2">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div>     
                        </div>
                    </div>
                        <div class="line"></div>
                        <p>Skor Kekuatan</p>
                        <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group row">
                                  <label class="col-sm-5 form-control-label"><b>Perilaku prososial</b><br><small class="text-primary"><b></b></small></label>
                                  @if ($rekammedik->per_prososial=="tidak")
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="per_prososial1" type="radio" value="ya"  name="per_prososial" class="form-control-custom radio-custom">
                                      <label for="per_prososial1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="per_prososial2" type="radio" value="tidak" name="per_prososial" checked="" class="form-control-custom radio-custom">
                                      <label for="per_prososial2">Tidak</label>
                                </div>
                              </div>    
                                  @else
                                  <div class="col-sm-7">
                                    <div class="i-checks">
                                      <input id="per_prososial1" type="radio" value="ya"  name="per_prososial" checked="" class="form-control-custom radio-custom">
                                      <label for="per_prososial1">Ya</label>
                                </div>
                                    <div class="i-checks">
                                      <input id="per_prososial2" type="radio" value="tidak" name="per_prososial" class="form-control-custom radio-custom">
                                      <label for="per_prososial2">Tidak</label>
                                </div>
                              </div>    
                                  @endif
                              
                          </div>            
                        </div>
                    </div>                   
                  </div>
                </div>
              </div>
                  <div class="col-lg-12">
                      <div class="card">
                        <div class="card-header d-flex align-items-center">
                          <h4>Kesehatan Intelegensia</h4>
                    </div>
                        <div class="card-body">
                            
                          <div class="row">
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="exampleFormControlFile1">Pilih FIle</label>
                                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="excel" >
                            </div>
                          </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  @if ($rekammedik->uuid)
                                  <a class="btn btn-primary" href="{{ route('rekammedik.download', $rekammedik->uuid) }}"><i class="fas fa-file-download"></i></a>
                                  <label for="exampleFormControlFile1">File saat ini : {{$rekammedik->namafile}}</label>    
                                  @else
                                  <label for="exampleFormControlFile1">File saat ini : Tidak Ada</label>    
                                  @endif
                              
                            </div>
                          </div>
                      </div>
                          <br>
                          <br>
                          <div class="form-group">       
                              <input type="submit" value="Ubah" class="btn btn-primary">
                              <a href="{{URL::previous()}}" class="btn btn-danger">Batal</a>
                        </div>            
                    </div>
                  </div>
                </div>
          </div>
      </form>
    </div>
  </section>
@endsection