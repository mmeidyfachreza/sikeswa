@extends('admin.layout')    
@section('content')
<section class="forms">
      <div class="container-fluid">
        <!-- Page Header-->
      <header> 
          <h1 class="h3 display">Rekam Medis            </h1>
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
                <form action="{{route('pilih.siswarm')}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                      <h4 style="float:left">Siswa</h4>
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
                        <label>Pilih Siswa</label>
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
                  <div class="card-header">Profil siswa</div>
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
                    <h4 style="float:left">Data Rekam Medik</h4>
                  <div style="float:right">
                      @if (isset($siswa) && Auth::user()->status=="ADMIN")
                      <a href="{{route('rekammedik.add',$siswa->id)}}" class="btn btn-primary btn-sm">Tambah</a>    
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
                          <th>Tanggal Pemeriksaan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php $x=1;?>
                        @if (isset($siswa->rekammedik))
                        @foreach ($siswa->rekammedik as $item)
                            <tr>
                                  <th scope="row">{{$x++}}</th>
                                <td>{{date("d-m-Y", strtotime($item->tgl_pemeriksaan))}}</td>
                                <td>
                                    @if (Auth::user()->status=='ADMIN')
                                  <a href="{{route('rekammedik.destroy',$item->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                  <a href="{{route('rekammedik.edit',$item->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                  <a href="{{route('rekammedik.show',$item->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>  
                                  @else
                                  <a href="{{route('rekammedik.show',$item->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a> 
                                  @endif
                                    
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