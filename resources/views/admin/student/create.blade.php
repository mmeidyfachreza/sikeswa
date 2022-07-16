@extends('layouts.layout')

@section('content')
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Anak </li>
        </ul>
    </div>
</div>
<section>
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display">Anak </h1>
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
                    <div class="card-header d-flex align-items-center">
                        <h4>Tambah Anak</h4>
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="{{route('siswa.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="text" name="nis" placeholder="Masukan NIK" class="form-control"
                                    value="{{old('nis','')}}" required>
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="name" placeholder="Masukan Nama Lengkap Anak"
                                    class="form-control" value="{{old('name', $student->name ?? '')}}" required>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tempat lahir</label>
                                        <input type="text" name="birth_place" placeholder="Masukan Tempat Lahir Anak"
                                            class="form-control"
                                            value="{{old('birth_place','')}}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="birth_date" class="form-control"
                                            value="{{old('birth_date','')}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="gender" class="custom-select">
                                    <option value='' selected disabled>Pilih</option>
                                    @foreach ($gender as $item)
                                    <option value={{$item}}>{{$item}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="address" id="" cols="30" rows="5" class="form-control"
                                    placeholder="Masukan Alamat Tempat Tinggal Anak Saat Ini"
                                    required>{{old('address','')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Penemuan Kasus</label>
                                <select name="school_from" class="custom-select">
                                    @foreach ($school_from as $item)
                                    <option value={{$item}}>{{$item}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tahun Masuk/Angkatan</label>
                                        <input type="number" name="class_year" class="form-control"
                                            value="{{old('class_year','')}}"
                                            placeholder="Masukan Tahun" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Kelas</label>
                                        <input type="text" name="classroom" placeholder="Masukan Kelas Anak Saat Ini"
                                            class="form-control" value="{{old('classroom','')}}"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Ayah</label>
                                        <input type="text" name='father_name' placeholder="Masukan Nama Ayah"
                                            class="form-control"
                                            value="{{old('father_name','')}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Ibu</label>
                                        <input type="text" name='mother_name' placeholder="Masukan Nama Ibu"
                                            class="form-control"
                                            value="{{old('mother_name','')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nama Wali (jika ada)</label>
                                <input type="text" name='guardian' placeholder="Masukan Nama Wali (Jika ada)"
                                    class="form-control" value="{{old('guardian','')}}">
                            </div>
                            <div class="form-group">
                                <label>No telepon Aktif</label>
                                <input type="text" name="phone_number" placeholder="Masukan Nomor Telepon"
                                    class="form-control" value="{{old('phone_number','')}}"
                                    required>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Faskes BPJS</label>
                                        <input type="text" name='faskes_bpjs' placeholder="Masukan Faskes BPJS"
                                            class="form-control"
                                            value="{{old('faskes_bpjs','')}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nomor BPJS</label>
                                        <input type="text" name='no_bpjs' placeholder="Masukan nomor BPJS"
                                            class="form-control" value="{{old('no_bpjs','')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Golongan Darah</label>
                                <select name="blood_type" class="custom-select">
                                    <option value='' selected disabled>--Pilih--</option>
                                    @foreach ($blood_type as $item)
                                    <option value={{$item}}>{{$item}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Foto Anak</label>
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
