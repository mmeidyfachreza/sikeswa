@extends('layouts.layout')

@section('content')
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Siswa </li>
        </ul>
    </div>
</div>
<section>
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display">Siswa </h1>
        </header>
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center"><span
                        style="background-image: url({{asset('uploads/avatars/'.$student->avatar)}})"
                        class="avatar avatar-xl mr-3"></span>
                    <div class="media-body overflow-hidden">
                        <h5 class="card-text mb-0">{{$student->name}}</h5>
                        <p class="card-text text-uppercase">Kelas {{$student->classroom->name ?? ''}}</p>
                        <p class="card-text">

                            NIS: {{$student->nis}}<br>bla
                        </p>
                    </div>
                </div><a href="#" class="tile-link"></a>
            </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                <li>Proses Gagal!!!</li>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    @isset ($record)
                    <div class="card-header">
                        <h4 style="float: left">Ubah kesehatan</h4>
                        <div style="float: right">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Daftar Gambar
                                </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="{{route('kesehatan.update',$record->id)}}"
                            method="POST">
                            @method('PUT')
                            @else
                            <div class="card-header">
                                <h4 style="float: left">Tambah kesehatan</h4>
                                <div style="float: right">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Daftar Gambar
                                      </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <form enctype="multipart/form-data" action="{{route('kesehatan.store',$student->nis)}}"
                                    method="POST">
                                    @endisset
                                    @csrf
                                    <div class="form-group">
                                        <label>Tanggal Pelaksanaan</label>
                                        <input type="date" name="date" class="form-control"
                                            value="{{old('date', $record->date ?? ' ')}}" required>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>Usia (total bulan/tahun dan bulan)</label>
                                            @isset($record)
                                            <input type="text" name="totalMonth" class="totalMonth form-control"
                                                value="{{12 * $record->age_year + $record->age_month}} bulan / {{$record->age_year}} Tahun {{$record->age_month}} Bulan" disabled>
                                            @else
                                            <input type="text" name="totalMonth" class="totalMonth form-control"
                                                value="{{12 * $ageYear + $ageMonth}} bulan / {{$ageYear}} Tahun {{$ageMonth}} Bulan" disabled>
                                            @endisset

                                        </div>
                                        @isset($record)
                                        <input type="hidden" name="age_year" value="{{$record->age_year}}">
                                        <input type="hidden" name="age_month" value="{{$record->age_month}}">
                                        @else
                                        <input type="hidden" name="age_year" value="{{$ageYear}}">
                                        <input type="hidden" name="age_month" value="{{$ageMonth}}">
                                        @endisset

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>Tinggi Badan (Cm)</label>
                                            <input id="height" type="number" name="height" class="form-control"
                                                value="{{old('height', $record->height ?? ' ')}}"
                                                placeholder="Masukan Tinggi Badan">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Berat Badan(Cm)</label>
                                            <input id="weight" type="number" name="weight" class="form-control"
                                                value="{{old('weight', $record->weight ?? ' ')}}"
                                                placeholder="Masukan Berat Badan">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>Status Tinggi Badan</label>
                                            <select name="s_height" class="custom-select">
                                                @isset ($record)
                                                @foreach ($height as $item)
                                                <option value={{$item->id}} @if ($item->id ==
                                                    $record->measurement->where('type','=','TB')->first()->id) selected
                                                    @endif>{{$item->description}}</option>
                                                @endforeach
                                                @else
                                                <option value='' selected disabled>--Pilih Kondisi--</option>
                                                @foreach ($height as $item)
                                                <option value={{$item->id}}>{{$item->description}}</option>
                                                @endforeach
                                                @endisset
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Status Berat Badan</label>
                                            <select name="s_weight" class="custom-select">
                                                @isset ($record)
                                                @foreach ($weight as $item)
                                                <option value={{$item->id}} @if ($item->id ==
                                                    $record->measurement->where('type','=','BB')->first()->id) selected
                                                    @endif>{{$item->description}}</option>
                                                @endforeach
                                                @else
                                                <option value='' selected disabled>--Pilih Kondisi--</option>
                                                @foreach ($weight as $item)
                                                <option value={{$item->id}}>{{$item->description}}</option>
                                                @endforeach
                                                @endisset
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>Indeks Masa Tubuh</label>
                                            <input id="bmi" type="number" min="1" class="form-control"
                                                value="{{old('bmi', $record->bmi ?? ' ')}}"
                                                placeholder="Silahkan isi Tinggi Badan dan Berat Badan terlebih dahulu" disabled>
                                            <input id="bmi2" type="hidden" name="bmi" value="{{old('bmi', $record->bmi ?? 0)}}">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Status Indeks Masa Tubuh</label>
                                            <select name="s_bmi" class="custom-select">
                                                @isset ($record)
                                                @foreach ($bmi as $item)
                                                <option value={{$item->id}} @if ($item->id ==
                                                    $record->measurement->where('type','=','IMT')->first()->id) selected
                                                    @endif>{{$item->description}}</option>
                                                @endforeach
                                                @else
                                                <option value='' selected disabled>--Pilih Kondisi--</option>
                                                @foreach ($bmi as $item)

                                                <option value={{$item->id}}>{{$item->description}}</option>

                                                @endforeach
                                                @endisset
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Kondisi Kulit</label>
                                        <select name="skin" class="custom-select">
                                            @isset ($record)
                                            @foreach ($skin as $item)
                                            <option value={{$item->id}} @if ($item->id ==
                                                $record->condition->where('type','=','kulit')->first()->id) selected
                                                @endif>{{$item->description}}</option>
                                            @endforeach
                                            @else
                                            <option value='' selected disabled>--Pilih Kondisi--</option>
                                            @foreach ($skin as $item)

                                            <option value={{$item->id}}>{{$item->description}}</option>

                                            @endforeach
                                            @endisset
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Kondisi gigi</label>
                                        <select name="tooth" class="custom-select">
                                            @isset ($record)
                                            @foreach ($tooth as $item)
                                            <option value={{$item->id}} @if ($item->id ==
                                                $record->condition->where('type','=','gigi')->first()->id) selected
                                                @endif>{{$item->description}}</option>
                                            @endforeach
                                            @else
                                            <option value='' selected disabled>--Pilih Kondisi--</option>
                                            @foreach ($tooth as $item)

                                            <option value={{$item->id}}>{{$item->description}}</option>

                                            @endforeach
                                            @endisset
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Kondisi Kuku</label>
                                        <select name="nail" class="custom-select">
                                            @isset ($record)
                                            @foreach ($nail as $item)
                                            <option value={{$item->id}} @if ($item->id ==
                                                $record->condition->where('type','=','kuku')->first()->id) selected
                                                @endif>{{$item->description}}</option>
                                            @endforeach
                                            @else
                                            <option value='' selected disabled>--Pilih Kondisi--</option>
                                            @foreach ($nail as $item)

                                            <option value={{$item->id}}>{{$item->description}}</option>

                                            @endforeach
                                            @endisset
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Kondisi rambut</label>
                                        <select name="hair" class="custom-select">
                                            @isset ($record)
                                            @foreach ($hair as $item)
                                            <option value={{$item->id}} @if ($item->id ==
                                                $record->condition->where('type','=','rambut')->first()->id) selected
                                                @endif>{{$item->description}}</option>
                                            @endforeach
                                            @else
                                            <option value='' selected disabled>--Pilih Kondisi--</option>
                                            @foreach ($hair as $item)

                                            <option value={{$item->id}}>{{$item->description}}</option>

                                            @endforeach
                                            @endisset
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Kondisi telinga</label>
                                        <select name="ear" class="custom-select">
                                            @isset ($record)
                                            @foreach ($ear as $item)
                                            <option value={{$item->id}} @if ($item->id ==
                                                $record->condition->where('type','=','telinga')->first()->id) selected
                                                @endif>{{$item->description}}</option>
                                            @endforeach
                                            @else
                                            <option value='' selected disabled>--Pilih Kondisi--</option>
                                            @foreach ($ear as $item)

                                            <option value={{$item->id}}>{{$item->description}}</option>

                                            @endforeach
                                            @endisset
                                        </select>
                                    </div>

                                    <input type="hidden" name="student_nis" value="{{$student->nis}}">
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
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Daftar Gambar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
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
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
</section>
@endsection

@section('custom-script')
<script>
var delay = (function () {
    var timer = 0;
    return function (callback, ms) {
        clearTimeout(timer);
        timer = setTimeout(callback, ms);
    };
})();
$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{csrf_token()}}'
        }
    });

    $('#height').keyup(function () {
        if ($('#height').val() && $('#weight').val()) {
            var hasil1 = $('#height').val() / 100;
            var hasil2 = $('#weight').val() / (hasil1 * hasil1);
            $('#bmi').val(hasil2.toFixed(2));
            $('#bmi2').val(hasil2.toFixed(2));
        }

        // delay(function () {
        //     $.ajax('http://localhost:8000/api/height', {
        //         method: 'POST',
        //         global: false,
        //         async: false,
        //         dataType: 'json',
        //         data: {
        //             height: $('#height').val(),
        //             bmi: $('#bmi').val()
        //         }
        //     }).then(
        //         function success(data) {
        //             $('#height_stat').val(data.height);
        //             $('#bmi_stat').val(data.bmi);
        //             console.log(data)
        //         }
        //     );
        // }, 800);
    });

    $('#weight').keyup(function () {

        if ($('#height').val() && $('#weight').val()) {
            var hasil1 = $('#height').val() / 100;
            var hasil2 = $('#weight').val() / (hasil1 * hasil1);
            $('#bmi').val(hasil2.toFixed(2));
            $('#bmi2').val(hasil2.toFixed(2));
        }
    });

})
</script>
@endsection
