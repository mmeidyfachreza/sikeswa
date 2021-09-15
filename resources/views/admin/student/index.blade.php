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
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 style="float:left"></h4>
                        <div style="float:right">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-default btn-sm" data-toggle="modal"
                                    data-target="#modal-sm">
                                    Import Data Siswa
                                </button>
                                <a href="{{route('siswa.export')}}" class="btn btn-warning btn-sm">Cetak Excel</a>
                                <a href="{{route('siswa.create')}}" class="btn btn-primary btn-sm">Tambah</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="table">
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
        <div class="modal fade" id="modal-sm">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Import Data Siswa</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('siswa.import')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <p>Pastikan mengikuti format excel yang telah disediakan sebelum melakukan import data</p>
                            <p><a href="" class="btn btn-success btn-sm">Download
                                    Format Excel</a></p>

                            <div class="form-group">
                                <label for="studentImport">Upload File Excel</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="studentImport"
                                            name="studentImport" required>
                                        <label class="custom-file-label" for="studentImport">Pilih file</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Proses</button>
                        </div>
                </div>
                </form>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
</section>
@endsection

@section('custom-script')
<script src="{{asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script type="text/javascript">
    $(function () {
            bsCustomFileInput.init();
    });
    $(document).ready(function() {
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        var table = $('#table').DataTable({
            processing: true,
            serverSide: true,
            ajax:"{{ route('siswa.index') }}",
            columns:[
            {data: 'DT_RowIndex', name: 'DT_RowIndex', searchable:false, orderable:false},
            {data: 'name', name: 'name'},
            {data: 'nis', name: 'nis'},
            {data: 'classroom', name: 'classroom'},
            {data: 'action', name: 'action', searchable:false, orderable:false},
            ]
        });

        $('body').on('click', '.deleteProduct', function () {
            var data_id = $(this).data("id");
            confirm("Apakah anda yakin untuk menghapus!");
            var url = '{{ route("siswa.destroy", ":id") }}';
            url = url.replace(':id', data_id );
            $.ajax({
                type: "DELETE",
                url: url,

                success: function (data) {
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
    })
</script>
@endsection
