
@extends('layouts.layout')

@section('style')
    <!-- Bootstrap Datepicker CSS-->
    <link rel="stylesheet" href="{{asset('template/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}">
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
<section>
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display">Kesehatan </h1>
        </header>
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
                        @isset ($health)
                        <div class="card-header d-flex align-items-center">
                            <h4>Ubah Siswa</h4>
                        </div>
                        <div class="card-body">
                        <form enctype="multipart/form-data" action="{{route('siswa.update',$health->id)}}" method="POST">
                            @method('PUT')
                            @else
                            <div class="card-header d-flex align-items-center">
                                <h4>Tambah Siswa</h4>
                            </div>
                            <div class="card-body">
                            <form enctype="multipart/form-data" action="{{route('siswa.store')}}" method="POST">
                                @endisset
                                @csrf
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="text" name="nis" placeholder="Masukan Nomor Induk Siswa" class="form-control input-datepicker-autoclose"
                                        value="{{old('nis', $health->date ?? '01/01/2020')}}" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Variant 1 - Date</label>
                                    <input type="text" value="10/20/2017" class="form-control input-datepicker">
                                  </div>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="name" placeholder="Masukan Nama Lengkap" class="form-control"
                                        value="{{old('name', $health->name ?? ' ')}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Tempat lahir</label>
                                    <input type="text" name="born_city" placeholder="Masukan Tempat Lahir"
                                        class="form-control" value="{{old('born_city', $health->born_city ?? ' ')}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="address" id="" cols="30" rows="5" class="form-control"
                                        required>{{old('address', $health->address ?? ' ')}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Asal Sekolah</label>
                                    <input type="text" name="school_from" placeholder="Masukan Asal Sekolah"
                                        class="form-control" value="{{old('school_from', $health->school_from ?? ' ')}}" required>
                                </div>
                                {{-- <div class="form-group">
                                    <label>Kelas Siswa</label>
                                    <select name="classroom_id" class="custom-select">
                                        @isset($health)
                                        @foreach ($classrooms as $item)
                                        <option value={{$item->id}} @if($item->id==$health->classroom_id)
                                            selected @endif>{{$item->name}}</option>
                                        @endforeach
                                        @else
                                        <option value='' selected disabled>--Pilih--</option>
                                        @foreach ($classrooms as $item)
                                        <option value={{$item->id}}>{{$item->name}}</option>
                                        @endforeach
                                        @endisset
                                    </select>
                                </div> --}}
                                <div class="form-group">
                                    <label>Ayah</label>
                                    <input type="text" name='father_name' placeholder="Masukan Nama Ayah" class="form-control"
                                        value="{{old('father_name', $health->father_name ?? ' ')}}">
                                </div>
                                <div class="form-group">
                                    <label>Ibu</label>
                                    <input type="text" name='mother_name' placeholder="Masukan Nama Ibu" class="form-control"
                                        value="{{old('mother_name', $health->mother_name ?? ' ')}}">
                                </div>
                                <div class="form-group">
                                    <label>Wali</label>
                                    <input type="text" name='guardian' placeholder="Masukan Nama Wali (Jika ada)"
                                        class="form-control" value="{{old('guardian', $health->guardian ?? ' ')}}">
                                </div>
                                <div class="form-group">
                                    <label>Nomor BPJS</label>
                                    <input type="text" name='no_bpjs' placeholder="Masukan nomor bpjs" class="form-control"
                                        value="{{old('no_bpjs', $health->no_bpjs ?? ' ')}}">
                                </div>
                                <div class="form-group">
                                    <label>Faskes BPJS</label>
                                    <input type="text" name='faskes_bpjs' placeholder="Masukan Faskes BPJS"
                                        class="form-control" value="{{old('faskes_bpjs', $health->faskes_bpjs ?? ' ')}}">
                                </div>
                                {{-- <div class="form-group">
                                    <label>Golongan Darah</label>
                                    <select name="blood_type" class="custom-select">
                                        @isset($health)
                                        @foreach ($blood_type as $item)
                                        <option value={{$item}} @if($item==$health->blood_type)
                                            selected @endif>{{$item}}</option>
                                        @endforeach
                                        @else
                                        <option value='' selected disabled>--Pilih--</option>
                                        @foreach ($blood_type as $item)
                                        <option value={{$item}}>{{$item}}</option>
                                        @endforeach
                                        @endisset
                                    </select>
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="gender" class="custom-select">
                                        <option value='' selected disabled>Pilih</option>
                                        @isset($health)
                                        @foreach ($gender as $item)
                                        <option value={{$item}} @if($item==$health->gender)
                                            selected @endif>{{$item}}</option>
                                        @endforeach
                                        @else
                                        @foreach ($gender as $item)
                                        <option value={{$item}}>{{$item}}</option>
                                        @endforeach
                                        @endisset
                                    </select>
                                </div> --}}
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" class="form-control-file" name="avatar">
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

@section('script')
    <!-- Bootstrap DatePicker-->
    <script src="{{asset('template/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
@endsection

@section('custom-script')
    <script>
        $(function () {
    var basicNoUISlider = $('#basicNoUISlider');
    if (basicNoUISlider.length > 0) {
        noUiSlider.create(basicNoUISlider[0], { // we need to pass only the element, not jQuery object
            start: [20, 80],
            range: {
                'min': [0],
                'max': [100]
            }
        });

    }

    var stepNoUISlider = $('#stepNoUISlider');
    if (stepNoUISlider.length > 0) {
        noUiSlider.create(stepNoUISlider[0], { // we need to pass only the element, not jQuery object
            start: [200, 1000],
            range: {
                'min': [0],
                'max': [1800]
            },
            step: 100,
            tooltips: true,
            connect: true
        });
    }

    $('.input-datepicker').datepicker({
        format: 'mm/dd/yyyy'
    });

    $('.input-datepicker-autoclose').datepicker({
        autoclose: true,
        format: 'mm/dd/yyyy'
    });

    $('.input-datepicker-multiple').datepicker({
        multidate: true,
        format: 'mm/dd/yyyy'
    });

    $('.input-datepicker-range').datepicker({
        format: 'mm/dd/yyyy'
    });

    $("input[name='touchspin0']").TouchSpin({
        buttondown_class: 'btn btn-secondary',
        buttonup_class: 'btn btn-secondary'
    });
    $("input[name='touchspin1']").TouchSpin({
        min: 0,
        max: 100,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        postfix: '%',
        buttondown_class: 'btn btn-secondary',
        buttonup_class: 'btn btn-secondary'
    });

    $("input[name='touchspin2']").TouchSpin({
        min: -1000000000,
        max: 1000000000,
        step: 50,
        maxboostedstep: 10000000,
        prefix: '$',
        buttondown_class: 'btn btn-secondary',
        buttonup_class: 'btn btn-secondary'
    });

    $('.selectpicker-primary').selectpicker({
        style: 'btn-primary',
        size: 4
    });

    $('.selectpicker-secondary').selectpicker({
        style: 'btn-secondary',
        size: 4
    });

    $('.selectpicker-light').selectpicker({
        style: 'btn-outline-light',
        size: 4
    });

    $('#multiselect1').multiSelect();

});
    </script>
@endsection
