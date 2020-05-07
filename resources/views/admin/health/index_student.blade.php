@extends('layouts.layout')

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
            <h1 class="h3 display">List Siswa </h1>
        </header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <form class="form-inline" action="{{route('student.search')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input id="inlineFormInput" style="width:175px" type="text" placeholder="Jane Doe"
                                    class="mr-3 form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Cari" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Nis</th>
                                        <th>Kelas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $x=1;?>
                                    @foreach ($students as $item)
                                    <tr>
                                        <th scope="row">{{$x++}}</th>
                                        <td><a href="{{route('student.find.health',$item->id)}}">{{$item->name}}</a></td>
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
