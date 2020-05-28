@extends('layouts.layout')

@section('content')
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active">Rekam Medik</li>
        </ul>
    </div>
</div>
<section>
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display">List Siswa </h1>
        </header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <form class="form-inline" action="{{route('student.search.record')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input id="inlineFormInput" style="width:200px" type="text" name="name" placeholder="Masukan Nama Siswa"
                                    class="mr-3 form-control" value="{{old('search',$search ?? '')}}">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Cari" class="btn btn-primary">
                            </div>
                            @isset($search)
                            <div class="form-group">
                                <a href="{{route('rekam-medik.index')}}" class="btn btn-danger">Ulang</a>
                            </div>
                            @endisset

                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-center">Nama</th>
                                        <th>Nis</th>
                                        <th>Kelas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $x=1;?>
                                    @foreach ($students as $item)
                                    <tr>
                                        <th scope="row">{{$x++}}</th>
                                        <td><a href="{{route('student.find.record',$item->id)}}">{{$item->name}}</a></td>
                                        <td>{{$item->nis}}</td>
                                        <td>{{$item->classroom->name ?? ''}}</td>
                                    </tr>
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
