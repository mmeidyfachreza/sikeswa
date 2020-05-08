@extends('layouts.layout')

@section('content')
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Pengguna </li>
        </ul>
    </div>
</div>
<section>
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display">Pengguna </h1>
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
                        @isset ($user)
                        <div class="card-header d-flex align-items-center">
                            <h4>Ubah Pengguna</h4>
                        </div>
                        <div class="card-body">
                        <form enctype="multipart/form-data" action="{{route('user.update',$user->id)}}" method="POST">
                            @method('PUT')
                            @else
                            <div class="card-header d-flex align-items-center">
                                <h4>Tambah Pengguna</h4>
                            </div>
                            <div class="card-body">
                            <form enctype="multipart/form-data" action="{{route('user.store')}}" method="POST">
                                @endisset
                                @csrf
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="name" placeholder="Masukan Nama Lengkap"
                                        class="form-control" value="{{old('name',$user->name ?? ' ')}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Nomor HP</label>
                                    <input type="text" name="phone_number" placeholder="Masukan Nomor HP"
                                        class="form-control" value="{{old('phone_number',$user->phone_number ?? ' ')}}"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control"
                                        value="{{old('email',$user->email ?? ' ')}}" required>
                                </div>
                                @isset ($user)
                                <div class="form-group">
                                    <label>Password Saat Ini</label>
                                    <input type="password" placeholder="Tidak perlu diisi jika tidak ingin merubah"
                                        name="current_password" class="form-control" autocomplete="current_password">
                                </div>
                                <div class="form-group">
                                    <label>Password Baru</label>
                                    <input type="password" placeholder="Tidak perlu diisi jika tidak ingin merubah"
                                        name="password" class="form-control" autocomplete="password">
                                </div>
                                <div class="form-group">
                                    <label>Konfirmasi Password Baru</label>
                                    <input type="password" placeholder="Tidak perlu diisi jika tidak ingin merubah"
                                        name="new_confirm_password" class="form-control"
                                        autocomplete="new_confirm_password">
                                </div>
                                @else
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                @endisset

                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="category_user_id" class="custom-select">
                                        @isset ($user)
                                        @foreach ($categories as $item)
                                        <option value={{$item->id}} @if ($item->id == $user->category_user_id) selected
                                            @endif>{{$item->name}}</option>
                                        @endforeach
                                        @else
                                        <option value='' selected disabled>--Pilih--</option>
                                        @foreach ($categories as $item)
                                        <option value={{$item->id}}>{{$item->name}}</option>
                                        @endforeach
                                        @endisset
                                    </select>
                                </div>
                                <div class="form-group">
                                    @isset ($user)
                                    <div class="form-group">
                                        <label>Foto saat ini</label>
                                        <img src="{{asset('/uploads/avatars/'.$user->avatar)}}"
                                            alt="belum pernah upload foto"
                                            style="width:155px; height:255px; display:block; border-radius:10%;">
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Foto Baru</label>
                                        <input type="file" class="form-control-file" name="avatar">
                                    </div>
                                    @else
                                    <label>Foto</label>
                                    <input type="file" class="form-control-file" name="avatar">
                                    @endisset

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
