@extends('layouts.layout')

@section('content')
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Rekam Medik </li>
        </ul>
    </div>
</div>
<section>
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display">Rekam Medik </h1>
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
                @isset ($record)
                <div class="card-header d-flex align-items-center">
                    <h4>Ubah Rekam Medik</h4>
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" action="{{route('rekam-medik.update',$record->id)}}"
                        method="POST">
                        @method('PUT')
                        @else
                        <div class="card-header d-flex align-items-center">
                            <h4>Tambah Rekam Medik</h4>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{route('rekam-medik.store')}}"
                                method="POST">
                                @endisset
                                @csrf
                                <div class="form-group">
                                    <label>Tanggal Pemeriksaan</label>
                                    <input type="date" name="date" class="form-control" value="{{old('date', $record->date ?? ' ')}}" required>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                      <a class="nav-link active" data-toggle="tab" href="#home">Kesehatan Mental</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" data-toggle="tab" href="#menu1">Modalitas Belajar</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" data-toggle="tab" href="#menu2">Dominasi Otak</a>
                                    </li>
                                  </ul>

                                  <!-- Tab panes -->
                                  <div class="tab-content">
                                    <div class="tab-pane container active" id="home">
                                        @include('admin.medical_record.mental_health')
                                    </div>
                                    <div class="tab-pane container fade" id="menu1">
                                        @include('admin.medical_record.learning_modality')
                                    </div>
                                    <div class="tab-pane container fade" id="menu2">
                                        @include('admin.medical_record.brain_domination')
                                    </div>
                                  </div>
                                  <input type="hidden" name="student_id" value="{{$student->id}}">
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
