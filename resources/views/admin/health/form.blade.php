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
                    <div class="card-header d-flex align-items-center">
                        <h4>Ubah kesehatan</h4>
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="{{route('kesehatan.update',$record->id)}}"
                            method="POST">
                            @method('PUT')
                            @else
                            <div class="card-header d-flex align-items-center">
                                <h4>Tambah kesehatan</h4>
                            </div>
                            <div class="card-body">
                                <form enctype="multipart/form-data" action="{{route('kesehatan.store',$student->id)}}"
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
                                            <label>Usia (Tahun dan Bulan)</label>
                                            <input type="number" max="99" min="1" name="age_year" class="form-control"
                                                value="{{old('age_year', $record->age_year ?? ' ')}}"
                                                placeholder="Usia Tahun">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>&nbsp</label>
                                            <input type="number" max="12" min="1" name="age_month" class="form-control"
                                                value="{{old('age_month', $record->age_month ?? ' ')}}"
                                                placeholder="Usia Bulan, maksimal 12 bulan">
                                        </div>
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

                                    <input type="hidden" name="student_id" value="{{$student->id}}">
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
