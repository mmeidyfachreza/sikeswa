
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
        {{-- <div class="card">
            <div class="card-body">
                <div class="media align-items-center"><span
                        style="background-image: url({{asset('uploads/avatars/'.$student->avatar)}})"
                        class="avatar avatar-xl mr-3"></span>
                    <div class="media-body overflow-hidden">
                        <h5 class="card-text mb-0">{{$student->name}}</h5>
                        <p class="card-text text-uppercase">Kelas {{$student->classroom->name ?? ''}}</p>
                        <p class="card-text">

                            blabla<br>bla
                        </p>
                    </div>
                </div><a href="#" class="tile-link"></a>
            </div>
        </div> --}}
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
                            <h4>Ubah Imunisasi</h4>
                        </div>
                        <div class="card-body">
                        <form enctype="multipart/form-data" action="{{route('imunisasi.update',$history->id)}}" method="POST">
                            @method('PUT')
                            @else
                            <div class="card-header d-flex align-items-center">
                                <h4>Tambah imunisasi</h4>
                            </div>
                            <div class="card-body">
                            <form enctype="multipart/form-data" action="{{route('imunisasi.store')}}" method="POST">
                                @endisset
                                @csrf
                                <div class="form-group">
                                    <label>Tanggal Pelaksanaan</label>
                                    <input type="date" name="date" class="form-control" value="{{old('date', date('Y-m-d',strtotime($history->date)) ?? '')}}"
                                        required>
                                </div>
                                @foreach ($immunizations as $item)
                                <div class="form-group">
                                    <label>{{$item->name}}</label>
                                    <input name="{{$item->name}}" class="form-control">{{old('address', $history->address ?? ' ')}}
                                </div>
                                @endforeach
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
