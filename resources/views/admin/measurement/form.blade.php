
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
                        @isset ($student)
                        <div class="card-header d-flex align-items-center">
                            <h4>Ubah Siswa</h4>
                        </div>
                        <div class="card-body">
                        <form enctype="multipart/form-data" action="{{route('status-gizi.update',$student->id)}}" method="POST">
                            @method('PUT')
                            @else
                            <div class="card-header d-flex align-items-center">
                                <h4>Tambah Siswa</h4>
                            </div>
                            <div class="card-body">
                            <form enctype="multipart/form-data" action="{{route('status-gizi.store')}}" method="POST">
                                @endisset
                                @csrf
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Nilai Minimal</label>
                                        <input type="number" min="1" name="min_value" class="form-control" value="{{old('min_value', $record->min_value ?? ' ')}}" placeholder="Masukan Nilai Minimum">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Nilai Maksimal</label>
                                        <input type="number" min="1" name="max_value" class="form-control" value="{{old('max_value', $record->max_value ?? ' ')}}" placeholder="Masukan Nilai Maksimal">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Keterangan</label>
                                        <input type="text" name="description" class="form-control" value="{{old('description', $record->description ?? ' ')}}" placeholder="Masukan Keterangan">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Tipe</label>
                                    <select name="type" class="custom-select">
                                        @isset ($record)
                                        @foreach ($type as $item)
                                        <option value={{$item}} @if ($item == $record->type) selected
                                            @endif>{{$item}}</option>
                                        @endforeach
                                        @else
                                        <option value='' selected disabled>--Pilih Tipe--</option>
                                        @foreach ($type as $item)

                                        <option value='{{$item}}'>{{$item}}</option>

                                        @endforeach
                                        @endisset
                                    </select>
                                    </div>
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
