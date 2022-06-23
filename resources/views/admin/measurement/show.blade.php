@extends('admin.layout')
@section('content')
<section class="forms">
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display">Anak </h1>
        </header>
        <div class="row">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="col-lg-12">
                <div class="card bg-light">
                    <div class="card-header">Profil Anak</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2">
                                <img class="card-img-top" src="{{asset('/uploads/avatars/'.$student->avatar)}}"
                                    alt="Card image">
                            </div>

                            <div class="col-lg-7">
                                <table class="table table-striped" style="width:100%">
                                    <tbody>
                                        <tr>
                                            <th class="pt-0 pb-0">Nama</th>
                                            <td class="pt-0 pb-0">{{$student->name}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Tempat Lahir</th>
                                            <td class="pt-0 pb-0">{{$student->born_city}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Tanggal Lahir</th>
                                            <td class="pt-0 pb-0">{{date("d-m-Y", strtotime($student->born_date))}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Alamat</th>
                                            <td class="pt-0 pb-0">{{$student->address}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Nama Ayah</th>
                                            <td class="pt-0 pb-0">{{$student->father_name}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Nama Ibu</th>
                                            <td class="pt-0 pb-0">{{$student->mother_name}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Nama Wali</th>
                                            <td class="pt-0 pb-0">{{$student->guardian ?? "Tidak Ada"}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Jenis Kelamin </th>
                                            <td class="pt-0 pb-0">{{$student->gender}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Golongan Darah</th>
                                            <td class="pt-0 pb-0">{{$student->blood_type}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Penemuan Kasus</th>
                                            <td class="pt-0 pb-0">{{$student->school_from}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">kelas</th>
                                            <td class="pt-0 pb-0">{{$student->classroom}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">No BPJS</th>
                                            <td class="pt-0 pb-0">{{$student->no_bpjs}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Faskes BPJS</th>
                                            <td class="pt-0 pb-0">{{$student->faskes_bpjs}}</td>
                                        </tr>
                                        <tr>
                                            <th class="pt-0 pb-0">Umur Saat Ini</th>
                                            <td class="pt-0 pb-0">{{$age ?? ""}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="{{route('siswa.index')}}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
