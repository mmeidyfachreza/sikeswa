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
                                <img class="card-img-top" src="{{asset('/uploads/avatars/'.$imunisasi->siswa->avatar)}}"
                                    alt="Card image">
                            </div>

                            <div class="col-lg-7">
                                <table class="table table-striped" style="width:100%">
                                    <tbody>
                                        <tr>
                                            <th>
                                                Nama<br>
                                                Tempat Lahir<br>
                                                Tanggal Lahir<br>
                                                Jenis Kelamin
                                            </th>
                                            <td></td>
                                            <td>
                                                {{$imunisasi->siswa->nama}}<br>
                                                {{$imunisasi->siswa->tmp_lahir}}<br>
                                                {{date("d-m-Y", strtotime($imunisasi->siswa->tgl_lahir))}}<br>
                                                {{$imunisasi->siswa->jns_kelamin}}<br>
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
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>Tambah Data Imunisasi</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{route('imunisasi.update',$imunisasi->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>Tanggal Pelaksanaan</label>
                                        <input type="date" name="tgl_imunisasi" placeholder="Masukan Nama Lengkap"
                                            class="form-control" value="{{$imunisasi->tgl_imunisasi}}">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label>Hepatitis B</label>
                                <input type="text" name="hep_b" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{$imunisasi->hep_b}}">
                            </div>
                            <div class="form-group">
                                <label>Polio</label>
                                <input type="text" name="polio" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{$imunisasi->polio}}">
                            </div>
                            <div class="form-group">
                                <label>BCG</label>
                                <input type="text" name="bcg" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{$imunisasi->bcg}}">
                            </div>
                            <div class="form-group">
                                <label>DTP</label>
                                <input type="text" name="dtp" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{$imunisasi->dtp}}">
                            </div>
                            <div class="form-group">
                                <label>Hib</label>
                                <input type="text" name="hib" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{$imunisasi->hib}}">
                            </div>
                            <div class="form-group">
                                <label>PCV</label>
                                <input type="text" name="pcv" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{$imunisasi->pcv}}">
                            </div>
                            <div class="form-group">
                                <label>Rotavirus</label>
                                <input type="text" name="rotavirus" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{$imunisasi->rotavirus}}">
                            </div>
                            <div class="form-group">
                                <label>Influenza</label>
                                <input type="text" name="influenza" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{$imunisasi->influenza}}">
                            </div>
                            <div class="form-group">
                                <label>Campak</label>
                                <input type="text" name="campak" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{$imunisasi->campak}}">
                            </div>
                            <div class="form-group">
                                <label>MMR</label>
                                <input type="text" name="mmr" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{$imunisasi->mmr}}">
                            </div>
                            <div class="form-group">
                                <label>Tifoid</label>
                                <input type="text" name="tifoid" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{$imunisasi->tifoid}}">
                            </div>
                            <div class="form-group">
                                <label>Hepatitis A</label>
                                <input type="text" name="hep_a" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{$imunisasi->hep_a}}">
                            </div>
                            <div class="form-group">
                                <label>Varisela</label>
                                <input type="text" name="varisela" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{$imunisasi->varisela}}">
                            </div>
                            <div class="form-group">
                                <label>HPV</label>
                                <input type="text" name="hpv" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{$imunisasi->hpv}}">
                            </div>
                            <div class="form-group">
                                <label>Japanese encephalitis</label>
                                <input type="text" name="jap_enc" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{$imunisasi->jap_enc}}">
                            </div>
                            <div class="form-group">
                                <label>Dengue</label>
                                <input type="text" name="dengue" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{$imunisasi->dengue}}">
                            </div>

                            <br>
                            <div class="form-group">
                                <input type="submit" value="Simpan" class="btn btn-primary">
                                <a href="{{URL::previous()}}" class="btn btn-danger">Batal</a>
                            </div>


                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
