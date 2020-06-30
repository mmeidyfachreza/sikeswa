@extends('layouts.layout')

@section('content')
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">kesehatan </li>
        </ul>
    </div>
</div>
<section>
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display">Detail Data kesehatan </h1>
        </header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 style="float:left">
                            {{$student->name}}
                        </h4>
                        <div style="float:right">
                            <a href="{{URL::previous()}}" class="btn btn-primary btn-sm">Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Tanggal Pelaksanaan</th>
                                        <th>Usia</th>
                                        <th>Tinggi Badan</th>
                                        <th>Berat Badan</th>
                                        <th>IMT</th>
                                        <th>Status Tinggi Badan</th>
                                        <th>Status Berat Badan</th>
                                        <th>Status IMT</th>
                                        <th>Kondisi Kulit</th>
                                        <th>Kondisi Gigi</th>
                                        <th>Kondisi Kuku</th>
                                        <th>Kondisi Rambut</th>
                                        <th>Kondisi Telinga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>{{date('d-m-Y',strtotime($record->date))}}</td>
                                    <td>{{$record->age_year}} Tahun {{$record->age_month}} Bulan</td>
                                    <td>{{$record->height}}</td>
                                    <td>{{$record->weight}}</td>
                                    <td>{{$record->bmi}}</td>
                                    @foreach ($record->measurement as $item)
                                    <td>{{$item->description ?? "Tidak Diketahui"}}</td>
                                    @endforeach
                                    @foreach ($record->condition as $item)
                                    <td>{{$item->description ?? "Tidak Diketahui"}}</td>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
