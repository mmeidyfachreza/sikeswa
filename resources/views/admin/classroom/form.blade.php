
@extends('layouts.layout')

@section('content')
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Kelas </li>
        </ul>
    </div>
</div>
<section>
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display">Kelas </h1>
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
                        @isset ($classroom)
                        <div class="card-header d-flex align-items-center">
                            <h4>Ubah Kelas</h4>
                        </div>
                        <div class="card-body">
                        <form action="{{route('kelas.update',$classroom->id)}}" method="POST">
                            @method('PUT')
                            @else
                            <div class="card-header d-flex align-items-center">
                                <h4>Tambah Kelas</h4>
                            </div>
                            <div class="card-body">
                            <form action="{{route('kelas.store')}}" method="POST">
                                @endisset
                                @csrf
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Nama Kelas</label>
                                        <input type="text" name="name" class="form-control" value="{{old('name', $classroom->name ?? ' ')}}" placeholder="Masukan Nama Kelas">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Keterangan</label>
                                        <textarea name="description" id="" cols="30" rows="5" class="form-control"
                                        required>{{old('description', $classroom->description ?? ' ')}}</textarea>
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
