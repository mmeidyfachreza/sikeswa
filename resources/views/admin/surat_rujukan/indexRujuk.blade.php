@extends('admin.layout')
@section('content')
<section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
      <header>
            <h1 class="h3 display">Surat Rujukan Kesehatan Anak Sekolah            </h1>
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
      <div class="row">
              <div class="col-lg-6">
                <form action="{{route('rujuk.cetak')}}" method="POST">
              @csrf
                <div class="card">
                        <div class="card-header">
                          <h4 >Anak</h4>

                    </div>

                    <div class="card-body" >
                          <div id="tes" class="form-group">
                              <label>Pilih Anak</label>
                          <input list="listsiswa" class="form-control myClass" placeholder="Masukan nama anak" autocomplete="off" name="siswa">
                          <datalist id="listsiswa">
                                  @foreach ($semuasiswa as $item)
                              <option data-value="{{$item->id}}" value="{{$item->nama}}"></option>
                              @endforeach
                          </datalist>
                      </div>
                      <div class="form-group">
                            <label>Petugas Pemeriksa:</label>
                        <input class="form-control" placeholder="Masukan nama petugas" required name="petugas">
                      </div>
                      <div class="form-group">
                            <label>Keluhan/Diagnosa:</label>
                        <textarea name="deskripsi" class="form-control" id="" cols="30" rows="3">{{old('deskripsi')}}</textarea>
                      </div>
                      <div class="form-group">
                            <label>Regio poin 1:</label>
                        <textarea name="regio1" class="form-control" id="" cols="30" rows="3">{{old('regio1')}}</textarea>
                      </div>
                      <div class="form-group">
                            <label>Regio poin 2:</label>
                        <textarea name="regio2" class="form-control" id="" cols="30" rows="3">{{old('regio2')}}</textarea>
                      </div>
                      <div class="form-group">
                            <label>Regio poin 3:</label>
                        <textarea name="regio3" class="form-control" id="" cols="30" rows="3">{{old('regio3')}}</textarea>
                      </div>
                      <div class="form-group">
                            <label>Regio poin 4:</label>
                        <textarea name="regio4" class="form-control" id="" cols="30" rows="3">{{old('regio4')}}</textarea>
                      </div>
                      <div class="form-group">
                            <label>Regio poin 5:</label>
                        <textarea name="regio5" class="form-control" id="" cols="30" rows="3">{{old('regio5')}}</textarea>
                      </div>
                      <br>
                      <br>
                      <div class="form-group">
                              <button id="submit" type="submit" class="btn btn-primary btn-sm">Cetak</button>
                          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                                Lihat Format Surat
                              </button>
                      </div>

                    </div>
                </div>
            </form>

          </div>

      </div>
    </div>
    <div class="modal fade" id="myModal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <!-- Modal Header -->
          <div class="modal-header">
                <h4 class="modal-title">Surat</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
                <img class="card-img-top" src="{{asset('/images/suratrujuk.jpg')}}" alt="Card image">
            <p>&nbsp;</p>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
