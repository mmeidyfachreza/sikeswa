
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
                        <form enctype="multipart/form-data" action="{{route('siswa.update',$student->nis)}}" method="POST">
                            @method('PUT')
                            @else
                            <div class="card-header d-flex align-items-center">
                                <h4>Tambah Siswa</h4>
                            </div>
                            <div class="card-body">
                            <form enctype="multipart/form-data" action="{{route('siswa.store')}}" method="POST">
                                @endisset
                                @csrf
                                <div class="form-group">
                                    <label>Nomor Induk Siswa</label>
                                    <input type="text" name="nis" placeholder="Masukan Nomor Induk Siswa" class="form-control"
                                        value="{{old('nis', $student->nis ?? '')}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="name" placeholder="Masukan Nama Lengkap Siswa" class="form-control"
                                        value="{{old('name', $student->name ?? '')}}" required>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tempat lahir</label>
                                            <input type="text" name="birth_place" placeholder="Masukan Tempat Lahir Siswa"
                                                class="form-control" value="{{old('birth_place', $student->birth_place ?? '')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" name="birth_date" class="form-control" value="{{old('birth_date', $student->birth_date ?? '')}}"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="gender" class="custom-select">
                                        <option value='' selected disabled>Pilih</option>
                                        @isset($student)
                                        @foreach ($gender as $item)
                                        <option value={{$item}} @if($item==$student->gender)
                                            selected @endif>{{$item}}</option>
                                        @endforeach
                                        @else
                                        @foreach ($gender as $item)
                                        <option value={{$item}}>{{$item}}</option>
                                        @endforeach
                                        @endisset
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="address" id="" cols="30" rows="5" class="form-control" placeholder="Masukan Alamat Tempat Tinggal Siswa Saat Ini"
                                        required>{{old('address', $student->address ?? '')}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Asal Sekolah</label>
                                    <input type="text" name="school_from" placeholder="Masukan Asal Sekolah"
                                        class="form-control" value="{{old('school_from', $student->school_from ?? '')}}" required>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tahun Masuk/Angkatan</label>
                                            <input type="number" name="class_year" class="form-control" value="{{old('class_year', $student->class_year ?? '')}}" placeholder="Masukan Tahun"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <input type="text" name="classroom" placeholder="Masukan Kelas Siswa Saat Ini"
                                                class="form-control" value="{{old('classroom', $student->classroom ?? '')}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Ayah</label>
                                            <input type="text" name='father_name' placeholder="Masukan Nama Ayah" class="form-control"
                                                value="{{old('father_name', $student->father_name ?? '')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Ibu</label>
                                            <input type="text" name='mother_name' placeholder="Masukan Nama Ibu" class="form-control"
                                                value="{{old('mother_name', $student->mother_name ?? '')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Nama Wali (jika ada)</label>
                                    <input type="text" name='guardian' placeholder="Masukan Nama Wali (Jika ada)"
                                        class="form-control" value="{{old('guardian', $student->guardian ?? '')}}">
                                </div>
                                <div class="form-group">
                                    <label>No telepon Aktif</label>
                                    <input type="text" name="phone_number" placeholder="Masukan Nomor Telepon"
                                        class="form-control" value="{{old('phone_number', $student->phone_number ?? '')}}" required>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Faskes BPJS</label>
                                            <input type="text" name='faskes_bpjs' placeholder="Masukan Faskes BPJS"
                                                class="form-control" value="{{old('faskes_bpjs', $student->faskes_bpjs ?? '')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nomor BPJS</label>
                                            <input type="text" name='no_bpjs' placeholder="Masukan nomor BPJS" class="form-control"
                                                value="{{old('no_bpjs', $student->no_bpjs ?? '')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Golongan Darah</label>
                                    <select name="blood_type" class="custom-select">
                                        @isset($student)
                                        @foreach ($blood_type as $item)
                                        <option value={{$item}} @if($item==$student->blood_type)
                                            selected @endif>{{$item}}</option>
                                        @endforeach
                                        @else
                                        <option value='' selected disabled>--Pilih--</option>
                                        @foreach ($blood_type as $item)
                                        <option value={{$item}}>{{$item}}</option>
                                        @endforeach
                                        @endisset
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Foto Siswa</label>
                                    <input type="file" class="form-control-file" name="avatar">
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
