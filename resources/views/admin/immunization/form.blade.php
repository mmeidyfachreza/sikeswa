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
                    <h4>Ubah Imunisasi</h4>
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" action="{{route('imunisasi.update',$record->id)}}"
                        method="POST">
                        @method('PUT')
                        @else
                        <div class="card-header d-flex align-items-center">
                            <h4>Tambah imunisasi</h4>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{route('imunisasi.store',$student->id)}}"
                                method="POST">
                                @endisset
                                @csrf
                                <div class="form-group">
                                    <label>Tanggal Pelaksanaan</label>
                                    <input type="date" name="date" class="form-control" value="{{old('date', $record->date ?? ' ')}}" required>
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
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Imunisasi <br><small
                                            class="text-primary">Silahkan Dicentang</small></label>
                                    <div class="col-sm-9">
                                        @isset($record)
                                @foreach ($record->immunization as $item)
                                <div class="i-checks">
                                    <input id="checkboxCustom{{$item->id}}" type="checkbox" name="{{$item->name}}" value="1"
                                        class="form-control-custom" @if ($item->pivot->status) checked="" @endif>
                                    <label for="checkboxCustom{{$item->id}}">{{$item->name}}</label>
                                </div>
                                @endforeach
                                @else
                                @foreach ($immunizations as $item)
                                <div class="i-checks">
                                    <input id="checkboxCustom{{$item->id}}1" type="checkbox" name="{{$item->name}}" value="1"
                                        class="form-control-custom">
                                    <label for="checkboxCustom{{$item->id}}1">{{$item->name}}</label>
                                </div>
                                @endforeach
                                @endisset
                                    </div>
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
