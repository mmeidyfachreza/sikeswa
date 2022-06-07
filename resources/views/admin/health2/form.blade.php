@extends('layouts.layout')

@section('link')
<!-- Bootstrap Select CSS-->
<link rel="stylesheet" href="{{asset('template/vendor/bootstrap-select/css/bootstrap-select.min.css')}}">
<!-- Bootstrap Touchspin CSS-->
<link rel="stylesheet" href="{{asset('template/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}">
<!-- Bootstrap Datepicker CSS-->
<link rel="stylesheet" href="{{asset('template/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}">
<!-- Bootstrap Tags input CSS-->
<link rel="stylesheet" href="{{asset('template/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
<!-- No UI Slider-->
<link rel="stylesheet" href="{{asset('template/vendor/nouislider/nouislider.css')}}">
<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
@endsection

@section('custom-style')
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }

</style>
@endsection

@section('content')
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Kesehatan </li>
        </ul>
    </div>
</div>
<section class="forms">
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display">Kesehatan </h1>
        </header>
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center"><span
                        style="background-image: url({{asset('uploads/avatars/'.$student->avatar)}})"
                        class="avatar avatar-xl mr-3"></span>
                    <div class="media-body overflow-hidden">
                        <h5 class="card-text mb-0">{{$student->name}}</h5>
                        <p class="card-text text-uppercase">Kelas {{$student->classroom ?? ''}}</p>
                        <p class="card-text">

                            blabla<br>bla
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
                    <div class="card-header d-flex align-items-center">
                        <h4>Tambah Data</h4>
                    </div>
                    <div class="card-body">
                        @isset ($health)

                        <form enctype="multipart/form-data" action="{{route('kesehatan.update',$health->id)}}"
                            method="POST">
                            @method('PUT')
                            @else
                            <form enctype="multipart/form-data" action="{{route('kesehatan.store')}}" method="POST">
                                @endisset
                                @csrf
                                <div class="form-group">
                                    <label>Tanggal Pemeriksaan</label>
                                    <input type="text" name="date" placeholder="Masukan Nomor Induk Siswa"
                                        class="form-control input-datepicker-autoclose"
                                        value="{{old('date', $health->date ?? '01/01/2020')}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Umur</label>
                                    <input type="text" name="age-disable" placeholder="Masukan Nama Lengkap"
                                        class="form-control"
                                        value="{{old('age', $age ?? 0)}} / {{old('month', $month ?? 0)}} Bulan" required
                                        disabled>
                                    <small class="form-text">Jika umur tidak sesuai silahkan atur tanggal lahir siswa
                                        terlebih dahulu.</small>
                                </div>
                                <div class="form-group">
                                    <label>Tinggi Badan</label>
                                    <input id="height" type="number" min="0" name="height"
                                        placeholder="Masukan Nama Lengkap" class="form-control"
                                        value="{{old('height', $health->height ?? 0)}}" required>
                                    <input id="height_stat" type="text" name="height_disable" placeholder="Masukan Tempat Lahir"
                                    class="form-control" value="{{old('height_stat', $health->height_stat ?? 'Tidak Diketahui')}}" required
                                    disabled>
                                </div>
                                <div class="form-group">
                                    <label>Berat Badan</label>
                                    <input id="weight" type="number" min="0" name="weight"
                                        placeholder="Masukan Tempat Lahir" class="form-control"
                                        value="{{old('weight', $health->height ?? 0)}}" required>
                                    <input id="weight_stat" type="text" name="weight_stat" placeholder="Masukan Tempat Lahir"
                                    class="form-control" value="{{old('weight_stat', $health->weight_stat ?? 'Tidak Diketahui')}}" required
                                    disabled>
                                </div>
                                <div class="form-group">
                                    <label>Indeks Masa Tubuh</label>
                                    <input id="bmi" type="text" name="bmi-dis" placeholder="Masukan Tempat Lahir"
                                        class="form-control" value="{{old('bmi', $health->bmi ?? 0)}}" required
                                        disabled>
                                    <input id="bmi2" type="hidden" name="bmi" value="{{old('bmi', $health->bmi ?? 0)}}">
                                    <input id="bmi_stat" type="text" name="bmi_stat" placeholder="Masukan Tempat Lahir"
                                    class="form-control" value="{{old('bmi_stat', $health->bmi_stat ?? 'Tidak Diketahui')}}" required
                                    disabled>
                                </div>
                                <div class="form-group">
                                    <label>Status Gigi</label>
                                    <select name="toot_cond" class="custom-select">
                                        @isset ($health)
                                        @foreach ($tooth_conds as $item)
                                        <option value={{$item->id}} @if ($item->id == $health->health_cond->description) selected
                                            @endif>{{$item->description}}</option>
                                        @endforeach
                                        @else
                                        <option value='' selected disabled>--Pilih Kondisi--</option>
                                        @foreach ($tooth_conds as $item)
                                        <option value={{$item->id}}>{{$item->description}}</option>
                                        @endforeach
                                        @endisset
                                    </select>
                                    <select name="tooth_stat" class="custom-select">
                                        @isset ($health)
                                        @foreach ($tooth_outs as $item)
                                        <option value={{$item->id}} @if ($item->id == $health->health_out->description) selected
                                            @endif>{{$item->description}}</option>
                                        @endforeach
                                        @else
                                        <option value='' selected disabled>--Pilih Kesimpulan--</option>
                                        @foreach ($tooth_outs as $item)
                                        <option value={{$item->id}}>{{$item->description}}</option>
                                        @endforeach
                                        @endisset
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status Rambut</label>
                                    <select name="hair_cond" class="custom-select">
                                        @isset ($health)
                                        @foreach ($hair_conds as $item)
                                        <option value={{$item->id}} @if ($item->id == $health->health_cond->description) selected
                                            @endif>{{$item->description}}</option>
                                        @endforeach
                                        @else
                                        <option value='' selected disabled>--Pilih Kondisi--</option>
                                        @foreach ($hair_conds as $item)
                                        <option value={{$item->id}}>{{$item->description}}</option>
                                        @endforeach
                                        @endisset
                                    </select>
                                    <select name="hair_stat" class="custom-select">
                                        @isset ($health)
                                        @foreach ($hair_outs as $item)
                                        <option value={{$item->id}} @if ($item->id == $health->health_out->description) selected
                                            @endif>{{$item->description}}</option>
                                        @endforeach
                                        @else
                                        <option value='' selected disabled>--Pilih Kesimpulan--</option>
                                        @foreach ($hair_outs as $item)
                                        <option value={{$item->id}}>{{$item->description}}</option>
                                        @endforeach
                                        @endisset
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status Kuku</label>
                                    <select name="nail_cond" class="custom-select">
                                        @isset ($health)
                                        @foreach ($nail_conds as $item)
                                        <option value={{$item->id}} @if ($item->id == $health->health_cond->description) selected
                                            @endif>{{$item->description}}</option>
                                        @endforeach
                                        @else
                                        <option value='' selected disabled>--Pilih Kondisi--</option>
                                        @foreach ($nail_conds as $item)
                                        <option value={{$item->id}}>{{$item->description}}</option>
                                        @endforeach
                                        @endisset
                                    </select>
                                    <select name="nail_stat" class="custom-select">
                                        @isset ($health)
                                        @foreach ($nail_outs as $item)
                                        <option value={{$item->id}} @if ($item->id == $health->health_out->description) selected
                                            @endif>{{$item->description}}</option>
                                        @endforeach
                                        @else
                                        <option value='' selected disabled>--Pilih Kondisi--</option>
                                        @foreach ($nail_outs as $item)
                                        <option value={{$item->id}}>{{$item->description}}</option>
                                        @endforeach
                                        @endisset
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status Telinga</label>
                                    <select name="ear_cond" class="custom-select">
                                        @isset ($health)
                                        @foreach ($ear_conds as $item)
                                        <option value={{$item->id}} @if ($item->id == $health->health_cond->description) selected
                                            @endif>{{$item->description}}</option>
                                        @endforeach
                                        @else
                                        <option value='' selected disabled>--Pilih Kondisi--</option>
                                        @foreach ($ear_conds as $item)
                                        <option value={{$item->id}}>{{$item->description}}</option>
                                        @endforeach
                                        @endisset
                                    </select>
                                    <select name="ear_stat" class="custom-select">
                                        @isset ($health)
                                        @foreach ($ear_outs as $item)
                                        <option value={{$item->id}} @if ($item->id == $health->health_out->description) selected
                                            @endif>{{$item->description}}</option>
                                        @endforeach
                                        @else
                                        <option value='' selected disabled>--Pilih Kesimpulan--</option>
                                        @foreach ($ear_outs as $item)
                                        <option value={{$item->id}}>{{$item->description}}</option>
                                        @endforeach
                                        @endisset
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status Kulit</label>
                                    <select name="skin_cond" class="custom-select">
                                        @isset ($health)
                                        @foreach ($skin_conds as $item)
                                        <option value={{$item->id}} @if ($item->id == $health->health_cond->description) selected
                                            @endif>{{$item->description}}</option>
                                        @endforeach
                                        @else
                                        <option value='' selected disabled>--Pilih Kondisi--</option>
                                        @foreach ($skin_conds as $item)
                                        <option value={{$item->id}}>{{$item->description}}</option>
                                        @endforeach
                                        @endisset
                                    </select>
                                    <select name="skin_stat" class="custom-select">
                                        @isset ($health)
                                        @foreach ($skin_outs as $item)
                                        <option value={{$item->id}} @if ($item->id == $health->health_out->description) selected
                                            @endif>{{$item->description}}</option>
                                        @endforeach
                                        @else
                                        <option value='' selected disabled>--Pilih Kesimpulan--</option>
                                        @foreach ($skin_outs as $item)
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
</section>
@endsection

@section('script')
<!-- Bootstrap Select-->
<script src="{{asset('template/vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<!-- Bootstrap Touchspin-->
<script src="{{asset('template/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
<!-- Bootstrap No UI Slider-->
<script src="{{asset('template/vendor/nouislider/nouislider.min.js')}}"></script>
<!-- Bootstrap DatePicker-->
<script src="{{asset('template/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap Tags Input-->
<script src="{{asset('template/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
<!-- Jasny Bootstrap - Input Masks-->
<script src="{{asset('template/vendor/jasny-bootstrap/js/jasny-bootstrap.min.js')}}"> </script>
<!-- MultiSelect-->
<script src="{{asset('template/vendor/multiselect/js/jquery.multi-select.js')}}"> </script>
<!-- Forms init-->
<script src="{{asset('template/js/forms-advanced.js')}}"></script>
<script src="{{asset('template/js/health.js')}}"></script>
@endsection

