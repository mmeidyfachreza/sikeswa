@extends('layouts.layout')

@section('content')
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Surat </li>
        </ul>
    </div>
</div>
<section>
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display">Kartu Kontrol</h1>
        </header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="student-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIS</th>
                                        <th>Kelas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Isi Surat</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{route('karkon.cetak')}}" method="POST" target="_blank">
                    @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nama Anak:</label>
                        <input class="form-control" disabled id="studentName" value="silahkan dipilih terlebih dahulu">
                    </div>
                    <div class="form-group">
                        <label>Tahun</label>
                        <select name="tahun" class="custom-select">
                            @foreach ($tahun as $key => $value)
                            <option value="{{$key}}">{{$key}}</option>
                            @endforeach
                        </select>
                    </div>
                        <input id="studentId" type="hidden" name="siswa" value="">

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="sumbit" class="btn btn-primary " >Cetak</button>
                </div>
            </form>
              </div>
            </div>
          </div>
    </div>
</section>
@endsection

@section('custom-script')
<script type="text/javascript">
    $(document).ready(function() {
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        var table = $('#student-table').DataTable({
            processing: true,
            serverSide: true,
            ajax:"{{ route('karkon.index') }}",
            columns:[
            {data: 'DT_RowIndex', name: 'DT_RowIndex', searchable:false, orderable:false},
            {data: 'name', name: 'name'},
            {data: 'nis', name: 'nis'},
            {data: 'classroom', name: 'classroom'},
            {data: 'action', name: 'action', searchable:false, orderable:false},
            ]
        });

        // $(".print btn btn-primary").on('click', function(event){
        //     event.stopPropagation();
        //     event.stopImmediatePropagation();
        //     console.log("asdasd");
        // });

        $('body').on('click', '.select-student', function () {
            var student_nis = $(this).data("id");
            var data = table.row($(this).closest('tr')).data();
            $('#studentId').val(data[Object.keys(data)[0]]); //id from datatables
            $('#studentName').val(data[Object.keys(data)[2]]); //name from datatables
        });

    })
</script>
@endsection
