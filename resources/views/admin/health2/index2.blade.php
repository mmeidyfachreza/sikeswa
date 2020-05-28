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
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 style="float:left"></h4>
                        <div style="float:right">
                            <a href="{{route('user.create')}}" class="btn btn-primary btn-sm">Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Siswa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $x=1;?>
                                    @foreach ($users as $item)
                                    <tr>
                                        <th scope="row">{{$x++}}</th>
                                        <td>{{$item->name}}</td>
                                    </tr>

                                    @endforeach
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css"
    rel="stylesheet" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js">
</script>
@endsection

@section('custom-script')
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{csrf_token()}}'
            }
        });



        $('.xedit').editable({
            url: '{{url("users/update")}}',
            mode: 'inline',
            title: 'Update',
            success: function (response, newValue) {
                console.log('Updated', response)
            }
        });

        $('#status').editable({
            url: '{{url("users/update")}}',
            mode: 'inline',
            showbuttons: false,
            title: 'Select status',
            source: function () {
                var result;
                $.ajax({
                    url: 'http://localhost:8000/api/healthout',
                    type: 'GET',
                    global: false,
                    async: false,
                    dataType: 'json',
                    success: function (data) {
                        result = data.data;
                    }
                });
                console.log(result);
                return result;
            },
            success: function (response, newValue) {
                console.log('Updated', response)
            }
        });



    })

</script>
@endsection
