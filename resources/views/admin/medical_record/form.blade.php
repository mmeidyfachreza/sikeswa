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
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center"><span
                        style="background-image: url({{asset('uploads/avatars/'.$student->avatar)}})"
                        class="avatar avatar-xl mr-3"></span>
                    <div class="media-body overflow-hidden">
                        <h5 class="card-text mb-0">{{$student->name}}</h5>
                        <p class="card-text text-uppercase">Kelas {{$student->classroom->name ?? ''}}</p>
                        <p class="card-text">NIS: {{$student->nis ?? "belum diatur"}}<br></p>
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
            @isset($show)
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h4>Lihat Rekam Medik</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <p style="color: black;font-weight: bold;">Tgl Pemeriksaan : {{$show->date}}</p>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#hs">Penjanringan Kesehatan</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#mh">Kesehatan Mental 1</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#mhh">Kesehatan Mental 2</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#lm">Modalitas Belajar</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#bd">Dominasi Otak</a>
                        </li>
                    </ul>
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane container active" id="hs">
                            @isset($record)
                            @include('admin.medical_record.health_screening',['record'=>$record])
                            @else
                            @include('admin.medical_record.health_screening')
                            @endisset
                        </div>
                        <div class="tab-pane container fade" id="mh">
                            @include('admin.medical_record.mental_health')
                        </div>
                        <div class="tab-pane container fade" id="mhh">
                            @include('admin.medical_record.mental_health2')
                        </div>
                        <div class="tab-pane container fade" id="lm">
                            @include('admin.medical_record.learning_modality')
                        </div>
                        <div class="tab-pane container fade" id="bd">
                            @include('admin.medical_record.brain_domination')
                        </div>
                      </div>
                </div>
            </div>
            @else
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
                                        <a class="nav-link active" data-toggle="tab" href="#hs">Penjanringan Kesehatan</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#mh">Kesehatan Mental 1</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" data-toggle="tab" href="#mhh">Kesehatan Mental 2</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" data-toggle="tab" href="#lm">Modalitas Belajar</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" data-toggle="tab" href="#bd">Dominasi Otak</a>
                                    </li>
                                </ul>
                                  <!-- Tab panes -->
                                  <div class="tab-content">
                                    <div class="tab-pane container active" id="hs">
                                        @isset($record)
                                        @include('admin.medical_record.health_screening',['record'=>$record])
                                        @else
                                        @include('admin.medical_record.health_screening')
                                        @endisset
                                    </div>
                                    <div class="tab-pane container fade" id="mh">
                                        @include('admin.medical_record.mental_health')
                                    </div>
                                    <div class="tab-pane container fade" id="mhh">
                                        @include('admin.medical_record.mental_health2')
                                    </div>
                                    <div class="tab-pane container fade" id="lm">
                                        @include('admin.medical_record.learning_modality')
                                    </div>
                                    <div class="tab-pane container fade" id="bd">
                                        @include('admin.medical_record.brain_domination')
                                    </div>
                                  </div>
                                  <input type="hidden" name="student_nis" value="{{$student->nis}}">
                                <div class="form-group">
                                    <input type="submit" value="Simpan" class="btn btn-primary">
                                    <a href="{{URL::previous()}}" class="btn btn-danger">Batal</a>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
            @endisset
        </div>
    </div>
</section>
@endsection

@section('custom-script')
<script type="text/javascript">
$(function () {
    $('.mental-health').keyup(function () {
        var hasilE=parseInt($('#mh3').val())+parseInt($('#mh8').val())+parseInt($('#mh13').val())+parseInt($('#mh16').val())+parseInt($('#mh24').val());
        var hasilC=parseInt($('#mh5').val())+parseInt($('#mh7').val())+parseInt($('#mh12').val())+parseInt($('#mh18').val())+parseInt($('#mh22').val());
        var hasilH=parseInt($('#mh2').val())+parseInt($('#mh10').val())+parseInt($('#mh15').val())+parseInt($('#mh21').val())+parseInt($('#mh25').val());
        var hasilP=parseInt($('#mh6').val())+parseInt($('#mh11').val())+parseInt($('#mh14').val())+parseInt($('#mh19').val())+parseInt($('#mh23').val());
        var hasilPr=parseInt($('#mh1').val())+parseInt($('#mh4').val())+parseInt($('#mh9').val())+parseInt($('#mh17').val())+parseInt($('#mh20').val());
        $('#e').html(hasilE);
        $('#c').html(hasilC);
        $('#h').html(hasilH);
        $('#p').html(hasilP);
        $('#pr').html(hasilPr);

        var hasilDifficulty = hasilE+hasilC+hasilH+hasilP;
        var hasilStrength = hasilPr;

        $('#difficulty').html(hasilDifficulty);
        $('#strength').html(hasilStrength);
    });

    $('.learning-modality').keyup(function () {
        var hasilV=parseInt($('#lm1').val())+parseInt($('#lm2').val())+parseInt($('#lm4').val())+parseInt($('#lm5').val())+parseInt($('#lm8').val())+parseInt($('#lm9').val())+parseInt($('#lm11').val())+parseInt($('#lm23').val());
        var hasilA=parseInt($('#lm2').val())+parseInt($('#lm6').val())+parseInt($('#lm112').val())+parseInt($('#lm13').val())+parseInt($('#lm14').val())+parseInt($('#lm15').val())+parseInt($('#lm16').val())+parseInt($('#lm17').val());
        var hasilK=parseInt($('#lm7').val())+parseInt($('#lm10').val())+parseInt($('#lm18').val())+parseInt($('#lm19').val())+parseInt($('#lm20').val())+parseInt($('#lm21').val())+parseInt($('#lm22').val())+parseInt($('#lm24').val());

        $('#v').html(hasilV);
        $('#a').html(hasilA);
        $('#k').html(hasilK);

        var scoreV = "belum optimal";
        var scoreA = "belum optimal";
        var scoreK = "belum optimal";

        if (hasilV>=18) {
            scoreV="optimal";
        }else if (hasilV>=12) {
            scoreV="cukup optimal";
        }

        if (hasilA>=18) {
            scoreA="optimal";
        }else if (hasilA>=12) {
            scoreA="cukup optimal";
        }

        if (hasilK>=18) {
            scoreK="optimal";
        }else if (hasilK>=12) {
            scoreK="cukup optimal";
        }

        $('#scorev').html(scoreV);
        $('#scorea').html(scoreA);
        $('#scorek').html(scoreK);

    });

    $('.brain-domination').keyup(function () {
        var total=parseInt($('#bd1').val())+
        parseInt($('#bd3').val())+
        parseInt($('#bd4').val())+
        parseInt($('#bd5').val())+
        parseInt($('#bd6').val())+
        parseInt($('#bd7').val())+
        parseInt($('#bd8').val())+
        parseInt($('#bd9').val())+
        parseInt($('#bd10').val())+
        parseInt($('#bd11').val())+
        parseInt($('#bd12').val())+
        parseInt($('#bd13').val())+
        parseInt($('#bd14').val())+
        parseInt($('#bd15').val())+
        parseInt($('#bd16').val())+
        parseInt($('#bd17').val())+
        parseInt($('#bd18').val())+
        parseInt($('#bd19').val())+
        parseInt($('#bd20').val());

        var result = "";

        if (total<=4) {
            result="sangat otak kiri";
        }else if (total<=8) {
            result="lebih otak kiri";
        }else if (total<=12) {
            result="otak kiri-kanan";
        }else if (total<=16) {
            result="lebih otak kanan";
        }else if (total<=20) {
            result="sangat otak kanan";
        }
        $('#interpretation').html(result);
    });

})
$(window).on('load', function() {
 console.log("sadas");
});

</script>
@endsection
