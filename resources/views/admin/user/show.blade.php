@extends('admin.layout')
@section('content')
<section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header>
            <h1 class="h3 display">Pengguna            </h1>
      </header>
          <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
            </div>
            @endif
            <div class="col-lg-12">
                    <div class="card bg-light">
                            <div class="card-header">Profil Pengguna</div>
                                <div class="card-body">
                                    <div class="row" >
                                        <div class="col-lg-2">
                                                <img class="card-img-top" src="{{asset('/uploads/avatars/'.$user->avatar)}}" alt="Card image">
                                    </div>

                                        <div class="col-lg-7">
                                            <table class="table table-striped" style="width:100%">
                                                <tbody>
                                                <tr>
                                                    <th>
                                                        Nama<br>
                                                        Email<br>
                                                        Nomor HP

                                                </th>
                                                    <td></td>
                                                    <td>
                                                        {{$user->name}}<br>
                                                        {{$user->email}}<br>
                                                        {{$user->no_hp}}<br>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                            <a href="{{route('user.index')}}" class="btn btn-primary">Kembali</a>
                                    </div>
                                </div>
                            </div>
                    </div>

        </div>
      </div>
    </div>
  </section>
@endsection
