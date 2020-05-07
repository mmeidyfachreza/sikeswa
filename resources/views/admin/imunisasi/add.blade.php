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
                                <img class="card-img-top" src="{{asset('/uploads/avatars/'.$siswa->avatar)}}"
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
                                                {{$siswa->nama}}<br>
                                                {{$siswa->tmp_lahir}}<br>
                                                {{date("d-m-Y", strtotime($siswa->tgl_lahir))}}<br>
                                                {{$siswa->jns_kelamin}}<br>
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

                        <form action="{{route('imunisasi.store',$siswa->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>Tanggal Pelaksanaan</label>
                                        <input type="date" name="tgl_imunisasi" placeholder="Masukan Nama Lengkap"
                                            class="form-control"
                                            value="{{Carbon\Carbon::today()->format('Y-m-d') ?? 0}}">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label>Hepatitis B</label>
                                <input type="text" name="hep_b" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{old('hep_b') ?? 0}}">
                            </div>
                            <div class="form-group">
                                <label>Polio</label>
                                <input type="text" name="polio" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{old('polio') ?? 0}}">
                            </div>
                            <div class="form-group">
                                <label>BCG</label>
                                <input type="text" name="bcg" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{old('bcg') ?? 0}}">
                            </div>
                            <div class="form-group">
                                <label>DTP</label>
                                <input type="text" name="dtp" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{old('dtp') ?? 0}}">
                            </div>
                            <div class="form-group">
                                <label>Hib</label>
                                <input type="text" name="hib" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{old('hib') ?? 0}}">
                            </div>
                            <div class="form-group">
                                <label>PCV</label>
                                <input type="text" name="pcv" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{old('pcv') ?? 0}}">
                            </div>
                            <div class="form-group">
                                <label>Rotavirus</label>
                                <input type="text" name="rotavirus" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{old('rotavirus') ?? 0}}">
                            </div>
                            <div class="form-group">
                                <label>Influenza</label>
                                <input type="text" name="influenza" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{old('influenza') ?? 0}}">
                            </div>
                            <div class="form-group">
                                <label>Campak</label>
                                <input type="text" name="campak" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{old('campak') ?? 0}}">
                            </div>
                            <div class="form-group">
                                <label>MMR</label>
                                <input type="text" name="mmr" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{old('mmr') ?? 0}}">
                            </div>
                            <div class="form-group">
                                <label>Tifoid</label>
                                <input type="text" name="tifoid" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{old('tifoid') ?? 0}}">
                            </div>
                            <div class="form-group">
                                <label>Hepatitis A</label>
                                <input type="text" name="hep_a" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{old('hep_a') ?? 0}}">
                            </div>
                            <div class="form-group">
                                <label>Varisela</label>
                                <input type="text" name="varisela" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{old('varisela') ?? 0}}">
                            </div>
                            <div class="form-group">
                                <label>HPV</label>
                                <input type="text" name="hpv" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{old('hpv') ?? 0}}">
                            </div>
                            <div class="form-group">
                                <label>Japanese encephalitis</label>
                                <input type="text" name="jap_enc" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{old('jap_enc') ?? 0}}">
                            </div>
                            <div class="form-group">
                                <label>Dengue</label>
                                <input type="text" name="dengue" placeholder="Masukan jumlah pemberian vaksin"
                                    class="form-control" value="{{old('dengue') ?? 0}}">
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
