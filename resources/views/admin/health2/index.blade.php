@extends('admin.layout')
@section('content')
<section class="forms">
      <div class="container-fluid">
        <!-- Page Header-->
    <header>
          <h1 class="h3 display">Home Care            </h1>
    </header>
    <div class="siswa">
            @if (\Session::has('error2'))
        <div class="alert alert-danger">
              <ul>
                <li>{!! \Session::get('error2') !!}</li>
          </ul>
        </div>
        @endif
        <div class="row">
              <div class="col-lg-4">
                <form action="{{route('pilih.siswakes')}}" method="POST">
              @csrf
              <div class="card">
                    <div class="card-header">
                      <h4 style="float:left">Anak</h4>
                  <div style="float:right">
                    <button id="submit" type="submit" class="btn btn-primary btn-sm">Cek Data</button>
                  </div>
                </div>
                <?php if (session()->has('siswa')) {
                      # code...
                  $siswa = session('siswa');
                  $semuasiswa = session('semuasiswa');
                }?>
                <div class="card-body" >
                      <div id="tes" class="form-group">
                        <label>Pilih Anak</label>
                    <input list="listsiswa" class="form-control myClass" autocomplete="off" name="siswa">
                    <datalist id="listsiswa">
                          @foreach ($semuasiswa as $item)
                      <option data-value="{{$item->id}}" value="{{$item->nama}}"></option>
                      @endforeach
                    </datalist>

                    {{-- <select name="siswa" class="custom-select">
                          <option value='' selected>Pilih</option>
                      @foreach ($semuasiswa as $item)
                      <option value="{{$item->id}}">{{$item->nama}}</option>
                      @endforeach
                    </select> --}}
                  </div>
                </div>
              </div>
            </form>

          </div>
          <div class="col-lg-8">
                <div class="card bg-light">
                  <div class="card-header">Profil Anak</div>
              <div class="card-body">
                    <div class="row" >
                      <div class="col-lg-2">

                        @if (isset($siswa))
                    <img class="card-img-top" src="{{asset('/uploads/avatars/'.$siswa->avatar)}}" alt="Card image">
                    @else
                    <img class="card-img-top" src="{{asset('/uploads/avatars/default.jpg')}}" alt="Card image">
                    @endif

                  </div>
                  <div class="col-lg-10 table-responsive">
                        <table class="table table-default" style="width:100%">
                      <tbody>
                            @if (isset($siswa))
                        <tr>
                              <th class="pt-0 pb-0">Nama</th>
                          <td class="pt-0 pb-0">{{$siswa->nama ?? ""}}</td>
                        </tr>
                        <tr>
                              <th class="pt-0 pb-0">Tempat Lahir</th>
                          <td class="pt-0 pb-0">{{$siswa->tmp_lahir ?? ""}}</td>
                        </tr>
                        <tr>
                              <th class="pt-0 pb-0">Tanggal Lahir</th>
                          <td class="pt-0 pb-0">{{date("d-m-Y", strtotime($siswa->tgl_lahir)) ?? ""}}</td>
                        </tr>
                        <tr>
                              <th class="pt-0 pb-0">Jenis Kelamin</th>
                          <td class="pt-0 pb-0">{{$siswa->jns_kelamin ?? ""}}</td>
                        </tr>
                        <tr>
                              <th class="pt-0 pb-0">Umur</th>
                          <td class="pt-0 pb-0">{{$umur ?? ""}}</td>
                        </tr>
                        @else

                        @endif


                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
          <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row">

          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 style="float:left">Data Home Care</h4>
            <div style="float:right">
              @if (isset($siswa))
              <a href="{{route('kesehatan.add',$siswa->id)}}" class="btn btn-primary btn-sm">Tambah</a>
              @else

              @endif

            </div>
          </div>

          <div class="card-body" >
                <div class="table-responsive">
                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th>#</th>
                    <th>Tanggal Pengukuran</th>
                    <th>Umur (total bulan)</th>
                    <th>Tinggi Badan</th>
                    <th>Berat Badan</th>
                    <th>BMI</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                      <?php $x=1;?>
                  @if (isset($siswa->pengukuran))
                  @foreach ($siswa->pengukuran as $item)
                  <tr>
                        <th scope="row">{{$x++}}</th>
                    <td>{{date("d-m-Y", strtotime($item->tgl_pengukuran))}}</td>
                    <td>{{$item->umur}}</td>
                    <td>{{$item->tinggi_b}}</td>
                    <td>{{$item->berat_b}}</td>
                    <td>{{$item->bmi}}</td>
                    <td>
                          <a href="{{route('kesehatan.destroy',$item->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                      <a href="{{route('kesehatan.edit',$item->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                      <a href="{{route('kesehatan.show',$item->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                    </td>
                  </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 style="float:left">Total Data Home Care</h4>
            <div style="float:right">
              @if (isset($siswa))
              <a href="{{route('kesehatan.add',$siswa->id)}}" class="btn btn-primary btn-sm">Tambah</a>
              @else

              @endif

            </div>
          </div>

          <div class="card-body" >
                <p>Contoh: September 2019</p>
            <form action="{{route('total.cetak')}}" method="post">
              @csrf
              <div class="form-group">
                    <div class="row">
                      <div class="col-lg-3">
                        <label>Mulai Bulan</label>
                    <input type="month" name="awal" placeholder="Masukan Nama Lengkap" class="form-control" value="{{Carbon\Carbon::today()->format('Y-m-d')}}" >
                  </div>
                  <div class="col-lg-3">
                        <label>Sampai Bulan</label>
                    <input type="month" name="akhir" placeholder="Masukan Nama Lengkap" placeholder="Contoh: September 2019" class="form-control" value="{{Carbon\Carbon::today()->format('Y-m-d')}}" >
                  </div>
                </div>
                <button type="submit" class="btn btn-info">Proses</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('script')
<script>
  $(document).ready(function() {

        // var data = {};
    // $("#listsiswa option").each(function(i,el) {
          //   data[$(el).data("value")] = $(el).val();
      // });
      // `data` : object of `data-value` : `value`
      // console.log(data, $("#listsiswa option").val());


      $('#submit').click(function()
      {
            var value = $('#tes').find('.myClass').val();
        var ubah = $('#tes').find('.myClass').val($('#listsiswa [value="' + value + '"]').data('value'));
        // alert($('#listsiswa [value="' + value + '"]').data('value'));
      });
    });
  </script>
  @endsection
