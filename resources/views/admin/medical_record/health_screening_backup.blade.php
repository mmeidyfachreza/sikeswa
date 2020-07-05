<div class="mt-3">
    <div class="text-center">
        <h5>Riwayat Kesehatan Anak</h5>
    </div>
    <hr>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Alergi makanan tertentu</b>
                <br><small class="text-primary"> </small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="alergi_makan1" type="radio" value="ya" name="alergi_makan"
                        class="form-control-custom radio-custom">
                    <label for="alergi_makan1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="alergi_makan2" type="radio" value="tidak" checked="" name="alergi_makan"
                        class="form-control-custom radio-custom">
                    <label for="alergi_makan2">Tidak</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Jika ya sebutkan</label>
            <textarea name="ket_alergi_makan" placeholder="Masukan alergi" class="form-control" id="" cols="30"
                rows="2">{{old('ket_alergi_makan')}}</textarea>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Alergi obat tertentu</b>
                <br><small class="text-primary"> </small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="alergi_obat1" type="radio" value="ya" name="alergi_obat"
                        class="form-control-custom radio-custom">
                    <label for="alergi_obat1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="alergi_obat2" type="radio" value="tidak" checked="" name="alergi_obat"
                        class="form-control-custom radio-custom">
                    <label for="alergi_obat2">Tidak</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Jika ya sebutkan</label>
            <textarea name="ket_alergi_obat" placeholder="Masukan alergi" class="form-control" id="" cols="30"
                rows="2">{{old('ket_alergi_obat')}}</textarea>
        </div>
    </div>  
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Pernah mengalami cedera serius
                    akibat kecelakaan</b><br><small class="text-primary"><b>(geger
                        otak/patah tulang/lainnya) </b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="cedera_serius1" type="radio" value="ya" name="cedera_serius"
                        class="form-control-custom radio-custom">
                    <label for="cedera_serius1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="cedera_serius2" type="radio" value="tidak" checked="" name="cedera_serius"
                        class="form-control-custom radio-custom">
                    <label for="cedera_serius2">Tidak</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Jika ya sebutkan</label>
            <textarea name="ket_cedera_serius" placeholder="Masukan alergi" class="form-control" id="" cols="30"
                rows="2">{{old('ket_cedera_serius')}}</textarea>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Riwayat kejang
                    berulang</b><br><small class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="kejang1" type="radio" value="ya" name="kejang"
                        class="form-control-custom radio-custom">
                    <label for="kejang1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="kejang2" type="radio" value="tidak" checked="" name="kejang"
                        class="form-control-custom radio-custom">
                    <label for="kejang2">Tidak</label>
                </div>
            </div>
        </div>
    </div>  
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Riwayat Pingsan</b><br><small
                    class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="pingsan1" type="radio" value="ya" name="pingsan"
                        class="form-control-custom radio-custom">
                    <label for="pingsan1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="pingsan2" type="radio" value="tidak" checked="" name="pingsan"
                        class="form-control-custom radio-custom">
                    <label for="pingsan2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Riwayat transfusi darah berulang
                </b><br><small class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="transfusi_darah1" type="radio" value="ya" name="transfusi_darah"
                        class="form-control-custom radio-custom">
                    <label for="transfusi_darah1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="transfusi_darah2" type="radio" value="tidak" checked="" name="transfusi_darah"
                        class="form-control-custom radio-custom">
                    <label for="transfusi_darah2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Riwayat kelainan bawaan yang
                    dimiliki</b><br><small class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="kelainan1" type="radio" value="ya" name="kelainan"
                        class="form-control-custom radio-custom">
                    <label for="kelainan1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="kelainan2" type="radio" value="tidak" checked="" name="kelainan"
                        class="form-control-custom radio-custom">
                    <label for="kelainan2">Tidak</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Jika ya sebutkan</label>
            <textarea name="ket_kelainan" placeholder="Masukan kelainan" class="form-control" id="" cols="30"
                rows="2">{{old('ket_kelainan')}}</textarea>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Riwayat penyakit
                    lainnya</b><br><small class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="lainnya1" type="radio" value="ya" name="lainnya"
                        class="form-control-custom radio-custom">
                    <label for="lainnya1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="lainnya2" type="radio" value="tidak" checked="" name="lainnya"
                        class="form-control-custom radio-custom">
                    <label for="lainnya2">Tidak</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Jika ya sebutkan</label>
            <textarea name="ket_lainnya" placeholder="Masukan penyakit" class="form-control" id="" cols="30"
                rows="2">{{old('ket_lainnya')}}</textarea>
        </div>
    </div>
</div>

<div class="mt-3">
    <div class="text-center">
        <h5>Riwayat Imunisasi (Khusus Peserta didik SD/MI)</h5>
    </div>
    <hr>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Memiliki catatan imunisasi</b>
                <br><small class="text-primary"> </small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="imunisasi1" type="radio" value="ya" name="imunisasi"
                        class="form-control-custom radio-custom">
                    <label for="imunisasi1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="imunisasi2" type="radio" value="tidak" checked="" name="imunisasi"
                        class="form-control-custom radio-custom">
                    <label for="imunisasi2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Saat bayi mendapat imunisasi </b>
                <br><small class="text-primary"> </small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="imunisasi_bayi1" type="radio" value="ya" name="imunisasi_bayi"
                        class="form-control-custom radio-custom">
                    <label for="imunisasi_bayi1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="imunisasi_bayi2" type="radio" value="tidak" checked=""
                        name="imunisasi_bayi" class="form-control-custom radio-custom">
                    <label for="imunisasi_bayi2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Pada SD kelas 1 mendapat
                    imunisasi</b><br><small class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="imun_sd_11" type="radio" value="ya" name="imun_sd_1"
                        class="form-control-custom radio-custom">
                    <label for="imun_sd_11">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="imun_sd_12" type="radio" value="tidak" checked="" name="imun_sd_1"
                        class="form-control-custom radio-custom">
                    <label for="imun_sd_12">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Pada SD kelas 2 mendapat
                    imunisasi</b><br><small class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="imun_sd_21" type="radio" value="ya" name="imun_sd_2"
                        class="form-control-custom radio-custom">
                    <label for="imun_sd_21">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="imun_sd_22" type="radio" value="tidak" checked="" name="imun_sd_2"
                        class="form-control-custom radio-custom">
                    <label for="imun_sd_22">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Pada SD kelas 3 mendapat
                    imunisasi</b><br><small class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="imun_sd_31" type="radio" value="ya" name="imun_sd_3"
                        class="form-control-custom radio-custom">
                    <label for="imun_sd_31">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="imun_sd_32" type="radio" value="tidak" checked="" name="imun_sd_3"
                        class="form-control-custom radio-custom">
                    <label for="imun_sd_32">Tidak</label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-3">
    <div class="text-center">
        <h5>Gaya Hidup</h5>
    </div>
    <hr>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Sarapan</b> <br><small class="text-primary">
                </small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="sarapan1" type="radio" value="ya" name="sarapan"
                        class="form-control-custom radio-custom">
                    <label for="sarapan1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="sarapan2" type="radio" value="tidak" checked="" name="sarapan"
                        class="form-control-custom radio-custom">
                    <label for="sarapan2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Jajan</b> <br><small class="text-primary">
                </small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="jajan1" type="radio" value="ya" name="jajan"
                        class="form-control-custom radio-custom">
                    <label for="jajan1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="jajan2" type="radio" value="tidak" checked="" name="jajan"
                        class="form-control-custom radio-custom">
                    <label for="jajan2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Resiko merokok</b><br><small
                    class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="res_merokok1" type="radio" value="ya" name="res_merokok"
                        class="form-control-custom radio-custom">
                    <label for="res_merokok1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="res_merokok2" type="radio" value="tidak" checked="" name="res_merokok"
                        class="form-control-custom radio-custom">
                    <label for="res_merokok2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Resiko minum minuman
                    beralkohol</b><br><small class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="res_alkohol1" type="radio" value="ya" name="res_alkohol"
                        class="form-control-custom radio-custom">
                    <label for="res_alkohol1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="res_alkohol2" type="radio" value="tidak" checked="" name="res_alkohol"
                        class="form-control-custom radio-custom">
                    <label for="res_alkohol2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-3">
    <div class="text-center">
        <h5>Riwayat Kesehatan Keluarga</h5>
    </div>
    <hr>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Tuberkolosis (TBC)
                    Diabetes</b><br><small class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="tbc1" type="radio" value="ya" name="tbc"
                        class="form-control-custom radio-custom">
                    <label for="tbc1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="tbc2" type="radio" value="tidak" checked="" name="tbc"
                        class="form-control-custom radio-custom">
                    <label for="tbc2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Diabetes Melitus</b><br><small
                    class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="dm1" type="radio" value="ya" name="dm"
                        class="form-control-custom radio-custom">
                    <label for="dm1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="dm2" type="radio" value="tidak" checked="" name="dm"
                        class="form-control-custom radio-custom">
                    <label for="dm2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Hepatitis/Sakit
                    Kuning</b><br><small class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="hepatitis1" type="radio" value="ya" name="hepatitis"
                        class="form-control-custom radio-custom">
                    <label for="hepatitis1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="hepatitis2" type="radio" value="tidak" checked="" name="hepatitis"
                        class="form-control-custom radio-custom">
                    <label for="hepatitis2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Asma/Bengek</b><br><small
                    class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="asma1" type="radio" value="ya" name="asma"
                        class="form-control-custom radio-custom">
                    <label for="asma1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="asma2" type="radio" value="tidak" checked="" name="asma"
                        class="form-control-custom radio-custom">
                    <label for="asma2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Penyakit jantung</b><br><small
                    class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="jantung1" type="radio" value="ya" name="jantung"
                        class="form-control-custom radio-custom">
                    <label for="jantung1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="jantung2" type="radio" value="tidak" checked="" name="jantung"
                        class="form-control-custom radio-custom">
                    <label for="jantung2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Stroke/lumpuh</b><br><small
                    class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="stroke1" type="radio" value="ya" name="stroke"
                        class="form-control-custom radio-custom">
                    <label for="stroke1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="stroke2" type="radio" value="tidak" checked="" name="stroke"
                        class="form-control-custom radio-custom">
                    <label for="stroke2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Obesitas/gemuk
                    sekali</b><br><small class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="obesitas1" type="radio" value="ya" name="obesitas"
                        class="form-control-custom radio-custom">
                    <label for="obesitas1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="obesitas2" type="radio" value="tidak" checked="" name="obesitas"
                        class="form-control-custom radio-custom">
                    <label for="obesitas2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Tekanan darah tinggi</b><br><small
                    class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="tdt1" type="radio" value="ya" name="tdt"
                        class="form-control-custom radio-custom">
                    <label for="tdt1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="tdt2" type="radio" value="tidak" checked="" name="tdt"
                        class="form-control-custom radio-custom">
                    <label for="tdt2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Kanker/tumor ganas</b><br><small
                    class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="kanker1" type="radio" value="ya" name="kanker"
                        class="form-control-custom radio-custom">
                    <label for="kanker1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="kanker2" type="radio" value="tidak" checked="" name="kanker"
                        class="form-control-custom radio-custom">
                    <label for="kanker2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Anamemia</b><br><small
                    class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="anamemia1" type="radio" value="ya" name="anamemia"
                        class="form-control-custom radio-custom">
                    <label for="anamemia1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="anamemia2" type="radio" value="tidak" checked="" name="anamemia"
                        class="form-control-custom radio-custom">
                    <label for="anamemia2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Thalasemia</b><br><small
                    class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="thalasemia1" type="radio" value="ya" name="thalasemia"
                        class="form-control-custom radio-custom">
                    <label for="thalasemia1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="thalasemia2" type="radio" value="tidak" checked="" name="thalasemia"
                        class="form-control-custom radio-custom">
                    <label for="thalasemia2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Hemofilia</b><br><small
                    class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="hemofilia1" type="radio" value="ya" name="hemofilia"
                        class="form-control-custom radio-custom">
                    <label for="hemofilia1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="hemofilia2" type="radio" value="tidak" checked="" name="hemofilia"
                        class="form-control-custom radio-custom">
                    <label for="hemofilia2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-3">
    <div class="text-center">
        <h5>Kesehatan Reproduksi (Untuk Peserta didik mulai dari kelas 4 SD)</h5>
    </div>
    <hr>
    <p>Peserta Didik Perempuan</p>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Gangguan pubertas</b> <br><small
                    class="text-primary"> </small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="pubertas1" type="radio" value="ya" name="pubertas"
                        class="form-control-custom radio-custom">
                    <label for="pubertas1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="pubertas2" type="radio" value="tidak" checked="" name="pubertas"
                        class="form-control-custom radio-custom">
                    <label for="pubertas2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Gangguan menstruasi</b> <br><small
                    class="text-primary"> </small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="menstruasi1" type="radio" value="ya" name="menstruasi"
                        class="form-control-custom radio-custom">
                    <label for="menstruasi1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="menstruasi2" type="radio" value="tidak" checked="" name="menstruasi"
                        class="form-control-custom radio-custom">
                    <label for="menstruasi2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Resiko IMS</b><br><small
                    class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="ims_p1" type="radio" value="ya" name="ims_p"
                        class="form-control-custom radio-custom">
                    <label for="ims_p1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="ims_p2" type="radio" value="tidak" checked="" name="ims_p"
                        class="form-control-custom radio-custom">
                    <label for="ims_p2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <p>Peserta Didik Laki-laki</p>
    <div class="mt-5 mb-5">
            <div class="form-group row">
                <label class="col-sm-6 form-control-label"><b>Resiko IMS</b><br><small
                        class="text-primary"><b></b></small></label>
                <div class="col-sm-6">
                    <div class="i-checks">
                        <input id="ims_l1" type="radio" value="ya" name="ims_l"
                            class="form-control-custom radio-custom">
                        <label for="ims_l1">Ya</label>
                    </div>
                    <div class="i-checks">
                        <input id="ims_l2" type="radio" value="tidak" checked="" name="ims_l"
                            class="form-control-custom radio-custom">
                        <label for="ims_l2">Tidak</label>
                    </div>
                </div>
            </div>
        </div>
    
    </div>

<div class="mt-3">
    <div class="text-center">
        <h5>Kesehatan Mental Emosional</h5>
    </div>
    <hr>
    <p>Skor Kesulitan</p>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Gejala Emosional</b> <br><small
                    class="text-primary"> </small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="gej_emosi1" type="radio" value="ya" name="gej_emosi"
                        class="form-control-custom radio-custom">
                    <label for="gej_emosi1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="gej_emosi2" type="radio" value="tidak" checked="" name="gej_emosi"
                        class="form-control-custom radio-custom">
                    <label for="gej_emosi2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Dominasi O</b> <br><small
                    class="text-primary"> </small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="mas_perilaku1" type="radio" value="ya" name="mas_perilaku"
                        class="form-control-custom radio-custom">
                    <label for="mas_perilaku1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="mas_perilaku2" type="radio" value="tidak" checked="" name="mas_perilaku"
                        class="form-control-custom radio-custom">
                    <label for="mas_perilaku2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Hiperaktifitas</b><br><small
                    class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="hiperaktifitas1" type="radio" value="ya" name="hiperaktifitas"
                        class="form-control-custom radio-custom">
                    <label for="hiperaktifitas1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="hiperaktifitas2" type="radio" value="tidak" checked=""
                        name="hiperaktifitas" class="form-control-custom radio-custom">
                    <label for="hiperaktifitas2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Masalah Teman Sebaya</b><br><small
                    class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="mas_tmnsbya1" type="radio" value="ya" name="mas_tmnsbya"
                        class="form-control-custom radio-custom">
                    <label for="mas_tmnsbya1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="mas_tmnsbya2" type="radio" value="tidak" checked="" name="mas_tmnsbya"
                        class="form-control-custom radio-custom">
                    <label for="mas_tmnsbya2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
    <p>Skor Kekuatan</p>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>Perilaku prososial</b><br><small
                    class="text-primary"><b></b></small></label>
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="per_prososial1" type="radio" value="ya" name="per_prososial"
                        class="form-control-custom radio-custom">
                    <label for="per_prososial1">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="per_prososial2" type="radio" value="tidak" checked=""
                        name="per_prososial" class="form-control-custom radio-custom">
                    <label for="per_prososial2">Tidak</label>
                </div>
            </div>
        </div>
    </div>
</div>
