@extends('admin.layout')
@section('content')
<section class="forms">
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display">Pengguna </h1>
        </header>
        <div class="row">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>Tambah Pengguna</h4>
                    </div>
                    <div class="card-body">
                        <p>Silahkan Tambahkan data Pengguna</p>
                        <form enctype="multipart/form-data" action="{{route('user.update',$user->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="name" placeholder="Masukan Nama Lengkap" class="form-control"
                                    value="{{$user->name}}" required>
                            </div>
                            <div class="form-group">
                                <label>Nomor HP</label>
                                <input type="text" name="phone_number" placeholder="Masukan Nomor HP" class="form-control"
                                    value="{{$user->phone_number}}" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" placeholder="Masukan Email" name="email" class="form-control"
                                    value="{{$user->email}}" required>
                            </div>
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
                                    name="new_confirm_password" class="form-control" autocomplete="new_confirm_password">
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select name="category_user_id" class="custom-select">
                                    @foreach ($categories as $item)
                                    <option value={{$item->id}}
                                        @if ($item->id == $user->category_user_id) selected @endif>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Foto saat ini</label>
                                <img src="{{secure_asset('/uploads/avatars/'.$user->avatar)}}" alt="belum pernah upload foto"
                                    style="width:155px; height:255px; display:block; border-radius:10%;">
                            </div>
                            <div class="form-group">
                                <label>Upload Foto Baru</label>
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
