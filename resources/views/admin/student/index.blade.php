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
                            <a href="{{route('siswa.create')}}" class="btn btn-primary btn-sm">Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="student-table">
                                <thead>
                                    <tr>
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
            ajax:"{{ route('siswa.index') }}",
            columns:[
            {data: 'name', name: 'name'},
            {data: 'nis', name: 'nis'},
            {data: 'classroom', name: 'classroom'},
            {data: 'action', name: 'action', searchable:false, orderable:false},
            ]
        });

        $('body').on('click', '.deleteProduct', function () { 
            var student_id = $(this).data("id");
            confirm("Are You sure want to delete !");
            var url = '{{ route("siswa.destroy", ":id") }}';
            url = url.replace(':id', student_id );
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