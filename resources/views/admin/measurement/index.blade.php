@extends('layouts.layout')

@section('content')
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Status Gizi </li>
        </ul>
    </div>
</div>
<section>
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display">Status Gizi </h1>
        </header>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 style="float:left"></h4>
                        <div style="float:right">
                            <a href="{{route('status-gizi.create')}}" class="btn btn-primary btn-sm">Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nilai Min</th>
                                        <th>Nilai Max</th>
                                        <th>Tipe</th>
                                        <th>Desksripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $x=1;?>
                                    @foreach ($measurements as $item)
                                    <tr>
                                        <th scope="row">{{$x++}}</th>
                                        <td>{{$item->min_value}}</td>
                                        <td>{{$item->max_value}}</td>
                                        <td>{{$item->type}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>
                                            <form action="{{ route('status-gizi.destroy',$item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Apakah anda yakin?')"
                                                    class="btn btn-danger btn-sm"><i
                                                        class="fa fa-trash"></i></button>

                                                <a href="{{route('status-gizi.edit',$item->id)}}"
                                                    class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                <a href="{{route('status-gizi.show',$item->id)}}"
                                                    class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                            </form>
                                        </td>
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
